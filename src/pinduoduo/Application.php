<?php
namespace EasyTBK\Pinduoduo;

use EasyTBK\BasicService;
use EasyTBK\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property Goods\Client       $goods
 * @property Category\Client    $category
 * @property Coupon\Client      $coupon
 * @property Gift\Client        $gift
 * @property Activity\Client    $activity
 * @property Promotion\Client   $promotion
 * @property Order\Client       $order
 * @property Statistics\Client  $statistics
 * @property User\Client        $user
 * @property Position\Client    $position
 */
class Application extends ServiceContainer
{

    protected $defaultConfig = [
        'http' => [
            'base_uri' => 'https://gw-api.pinduoduo.com/api/router',
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
        Pid\ServiceProvider::class,
        Promotion\ServiceProvider::class,
        Order\ServiceProvider::class,
    ];


    public function getOptions($options, $method = 'GET') {
        $art = $method == 'GET' ? 'query' : 'form_params';
        $options[$art] = [
            'client_id' => $this->userConfig['client_id'],
            'type' => $options[$art]['type'],
            'timestamp' => time(),
            'data_type' => 'JSON',
            'version' => 'V1',
        ];
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
        $str = $this->userConfig['client_secret'] . $str . $this->userConfig['client_secret'];
        $signature = strtoupper(md5($str));
        return $signature;
    }
}
