<?php
namespace EasyTBK\Pinduoduo\Goods;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 商品查询
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.search
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function search(array $param) {
        $param['type'] = 'pdd.ddk.goods.search';
        return $this->httpGet('', $param);
    }

    /**
     * 商品推荐
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.recommend.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function recommend(array $param) {
        $param['type'] = 'pdd.ddk.goods.recommend.get';
        return $this->httpGet('', $param);
    }

    /**
     * 商品详情
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.detail
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function detail(array $param) {
        $param['type'] = 'pdd.ddk.goods.detail';
        return $this->httpGet('', $param);
    }
    /**
     * 爆款排行
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.top.goods.list.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function top_goods(array $param) {
        $param['type'] = 'pdd.ddk.top.goods.list.query';
        return $this->httpGet('', $param);
    }
}
