<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Jingdong;

use EasyTBK\BasicService;
use EasyTBK\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property Goods\Client                     $goods
 * @property Category\Client                     $category
 * @property Coupon\Client                     $coupon
 * @property Gift\Client                     $gift
 * @property Activity\Client                     $activity
 * @property Promotion\Client                     $promotion
 * @property Order\Client                     $order
 * @property Statistics\Client                     $statistics
 * @property User\Client                     $user
 * @property Position\Client                     $position
 */
class Application extends ServiceContainer
{

    protected $defaultConfig = [
        'http' => [
            'base_uri' => 'https://router.jd.com/api',
        ],
    ];

    protected $stsyemConfig = [

    ];

    protected $needAccessToken = false;

    /**
     * @var array
     */
    protected $providers = [
        Goods\ServiceProvider::class,
        Category\ServiceProvider::class,
        Coupon\ServiceProvider::class,
        Gift\ServiceProvider::class,
        Activity\ServiceProvider::class,
        Promotion\ServiceProvider::class,
        Order\ServiceProvider::class,
        Statistics\ServiceProvider::class,
        User\ServiceProvider::class,
        Position\ServiceProvider::class,
    ];


    public function getOptions($options, $method = 'GET') {
        $art = $method == 'GET' ? 'query' : 'form_params';
        $param_json = $options[$art];unset($param_json['method']);
        $options[$art] = [
            'app_key' => $this->userConfig['app_key'],
            'method' => $options[$art]['method'],
            'timestamp' => date('Y-m-d H:i:s', time()),
            'format' => 'json',
            'v' => '1.0',
            'sign_method' => 'md5',

        ];
        $options[$art]['param_json'] = json_encode($param_json);
        $options[$art]['sign'] = $this->getSignature($options[$art]);
        return $options;
    }

    public function getSignature(array $options = []) {
        ksort($options);
        $str = '';
        foreach ($options as $key => $value) {
            if (!empty($value)) {
                $str .= ($key) . ($value);
            }
        }
        $str = $this->userConfig['app_secret'] . $str . $this->userConfig['app_secret'];
        $signature = strtoupper(md5($str));
        return $signature;
    }
}
