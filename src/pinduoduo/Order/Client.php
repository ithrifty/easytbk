<?php
namespace EasyTBK\Pinduoduo\Order;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * 按更新时间同步已支付后的订单
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.order.list.increment.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function increment($param) {
        $param['type'] = 'pdd.ddk.order.list.increment.get';
        return $this->httpGet('', $param);
    }

    /**
     * 按支付时间段查询订单
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.order.list.range.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function range(array $param) {
        $param['type'] = 'pdd.ddk.order.list.range.get';
        return $this->httpGet('', $param);
    }

    /**
     * 按礼金创建时间段查询礼金效果数据
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.cashgift.data.query
     * @param int $media_id 媒体ID
     * @param array $pid_list 推广位列表
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cashgift(array $param) {
        $param['type'] = 'pdd.ddk.cashgift.data.query';
        return $this->httpGet('', $param);
    }


    /**
     * 查询订单详情
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.order.detail.get
     * @param int $media_id 媒体ID
     * @param array $pid_list 推广位列表
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function detail(array $param) {
        $param['type'] = 'pdd.ddk.order.detail.get';
        return $this->httpGet('', $param);
    }
}
