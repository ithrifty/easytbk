<?php
namespace EasyTBK\Jingdong\Order;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 订单行查询接口
     * @url https://union.jd.com/openplatform/api/10707
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function row(array $param) {
        $options = [
            'method' => 'jd.union.open.order.row.query',
            'orderReq' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 奖励订单查询接口【申请】
     * @url https://union.jd.com/openplatform/api/10781
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function bonus(array $param) {
        $options = [
            'method' => 'jd.union.open.order.row.query',
            'orderReq' => $param,
        ];
        return $this->httpGet('', $options);
    }
    /**
     * 工具商订单行查询接口【申请】
     * @url https://union.jd.com/openplatform/api/14560
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function agent(array $param) {
        $options = [
            'method' => 'jd.union.open.order.row.query',
            'orderReq' => $param,
        ];
        return $this->httpGet('', $options);
    }





}
