<?php
namespace EasyTBK\Jingdong\Statistics;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 礼金效果数据
     * @url https://union.jd.com/openplatform/api/12248
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function giftcoupon(array $param) {
        $options = [
            'method' => 'jd.union.open.statistics.giftcoupon.query',
            'effectDataReq' => $param,
        ];
        return $this->httpGet('', $options);
    }
    /**
     * 京享红包效果数据
     * @url https://union.jd.com/openplatform/api/14416
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function redpacket(array $param) {
        $options = [
            'method' => 'jd.union.open.statistics.redpacket.query',
            'effectDataReq' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 工具商京享红包效果数据查询接口【申请】
     * @url https://union.jd.com/openplatform/api/14861
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function redpacketAgent(array $param) {
        $options = [
            'method' => 'jd.union.open.statistics.redpacket.agent.query',
            'effectDataAgentReq' => $param,
        ];
        return $this->httpGet('', $options);
    }




}
