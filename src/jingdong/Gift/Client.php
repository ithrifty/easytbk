<?php
namespace EasyTBK\Jingdong\Gift;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 礼金创建
     * @url https://union.jd.com/openplatform/api/12246
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $param) {
        $options = [
            'method' => 'jd.union.open.coupon.gift.get',
            'couponReq' => $param,
        ];
        return $this->httpGet('', $options);
    }
    /**
     * 礼金停止
     * @url https://union.jd.com/openplatform/api/12240
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function stop(array $param) {
        $options = [
            'method' => 'jd.union.open.coupon.gift.stop',
            'couponReq' => $param,
        ];
        return $this->httpGet('', $options);
    }




}
