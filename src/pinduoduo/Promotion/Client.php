<?php
namespace EasyTBK\Pinduoduo\Promotion;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * 生成普通商品推广链接
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.promotion.url.generate
     * @param int $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function generate($param = []) {
        $param['type'] = 'pdd.ddk.goods.promotion.url.generate';
        return $this->httpGet('', $param);
    }

    /**
     * 生成营销工具推广链接
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.rp.prom.url.generate
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function rpPromUrlGenerate(array $param) {
        $param['type'] = 'pdd.ddk.rp.prom.url.generate';
        return $this->httpGet('', $param);
    }

    /**
     * 生成商城推广链接
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.cms.prom.url.generate
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cmsPromUrlGenerate(array $param) {
        $param['type'] = 'pdd.ddk.cms.prom.url.generate';
        return $this->httpGet('', $param);
    }
    /**
     * 生成拼多多主站频道推广链接
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.resource.url.gen
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function resourceUrlGen(array $param) {
        $param['type'] = 'pdd.ddk.resource.url.gen';
        return $this->httpGet('', $param);
    }

    /**
     * 转链
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.zs.unit.url.gen
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function goodsZsUnitUrlGen(array $param) {
        $param['type'] = 'pdd.ddk.goods.zs.unit.url.gen';
        return $this->httpGet('', $param);
    }


}
