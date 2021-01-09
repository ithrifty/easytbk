<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Dataoke;

use EasyTBK\BasicService;
use EasyTBK\Kernel\ServiceContainer;
use QL\Kernel;

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
            'base_uri' => 'https://openapi.dataoke.com',
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
        Search\ServiceProvider::class,
        Order\ServiceProvider::class,
    ];


    public function getOptions($options, $method = 'GET') {
        $art = $method == 'GET' ? 'query' : 'form_params';
        $sys = [
            'appKey' => $this->userConfig['app_key'],
            'nonce' => str_pad(mt_rand(0,999999),6,"0", STR_PAD_BOTH),
            'timer' => microtime(),
            'version' => $options[$art]['version'] ?? 'v1.0.0',
        ];
        $options[$art] = array_merge($sys, $options[$art]);
        $options[$art]['signRan'] = $this->getSignature($options[$art]);

        return $options;
    }

    public function getSignature(array $options = []) {
        ksort($options);
        $str = '';
        foreach ($options as $key => $value) {
            if (!empty($value)) {
                $str .= ($key) . '='. ($value).'&';
            }
        }
        $str = $str . 'key='.$this->userConfig['app_secret'];
        $signature = strtoupper(md5($str));
        return $signature;
    }
}
