<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Suning;

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
            'base_uri' => 'https://open.suning.com',
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
        //Order\ServiceProvider::class,
    ];


    public function getOptions($options, $method = 'GET') {
        $art = $method == 'GET' ? 'query' : 'form_params';
        // 苏宁坑爹的 header 组装
        $options['headers'] = [
            'AppSecret' => $this->userConfig['AppSecret'],
            'AppMethod' => $this->config->AppMethod,
            'AppRequestTime' => date('Y-m-d H:i:s', time()),
            'AppKey' => $this->userConfig['AppKey'],
            'VersionNo' => 'v1.2',
        ];
        $post_field = [
            'sn_request' => [
                'sn_body' => [
                    "{$this->config->ReqMethod}" => $options[$art],
                ]
            ]
        ];
        $options['headers']['post_field'] = base64_encode(json_encode($post_field));
        $options['headers']['signInfo'] = $this->getSignature($options['headers']);
        unset($options['headers']['post_field'], $options['headers']['appSecret'], $options[$art]);
        $options['headers']['Format'] = 'json';
        $options['json'] = $post_field;
        return $options;
    }

    public function getSignature(array $options = []) {
        $str = '';
        foreach ($options as $key => $value) {
            if (!empty($value)) {
                $str .= $value;
            }
        }
        $signature = md5($str);
        return $signature;
    }
}
