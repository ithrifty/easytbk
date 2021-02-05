<?php
namespace EasyTBK\Pinduoduo;
use EasyTBK\BasicService;
use EasyTBK\Kernel\Exceptions\RuntimeException;
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
        $options[$art] = $this->paramsHandle($options[$art]);
        $opts = [
            'client_id' => $this->userConfig['client_id'],
            'type' => $options[$art]['type'],
            'timestamp' => time(),
            'data_type' => 'JSON',
            'version' => 'V1',
        ];
        $options[$art] = array_merge($opts, $options[$art]);
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

    public function response($response) {
        if(array_key_exists('error_response', $response)) {
            throw new \RuntimeException($response['error_response']['sub_msg']);
        }
        return current($response);
    }

    /**
     * 参数预处理
     * @param array $params
     * @return array
     */
    protected function paramsHandle(array $params)
    {
        array_walk($params, function (&$item) {
            if (is_array($item)) {
                $item = json_encode($item);
            }
            if (is_bool($item)) {
                $item = ['false', 'true'][intval($item)];
            }
        });
        return $params;
    }
}
