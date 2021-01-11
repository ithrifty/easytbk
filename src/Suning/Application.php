<?php
namespace EasyTBK\Suning;

use EasyTBK\BasicService;
use EasyTBK\Kernel\ServiceContainer;
use QL\Kernel;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property Goods\Client       $goods
 * @property Category\Client    $category
 * @property Coupon\Client      $coupon
 * @property Activity\Client    $activity
 * @property Promotion\Client   $promotion
 * @property Order\Client       $order
 * @property Juin\Client        $Juin
 * @property User\Client        $user
 * @property Twitter\Client     $twitter
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
        Coupon\ServiceProvider::class,
        Activity\ServiceProvider::class,
        Promotion\ServiceProvider::class,
        Order\ServiceProvider::class,
        Juin\ServiceProvider::class,
        User\ServiceProvider::class,
        Twitter\ServiceProvider::class,
    ];


    public function getOptions($options, $method = 'GET') {
        $art = $method == 'GET' ? 'query' : 'form_params';
        // 苏宁坑爹的 header 组装
        $options['headers'] = [
            'AppSecret' => $this->userConfig['app_secret'],
            'AppMethod' => $this->config->AppMethod,
            'AppRequestTime' => date('Y-m-d H:i:s', time()),
            'AppKey' => $this->userConfig['app_key'],
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
        unset($options['headers']['post_field'], $options['headers']['app_secret'], $options[$art]);
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
