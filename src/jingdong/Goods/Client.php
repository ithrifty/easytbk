<?php
namespace EasyTBK\Jingdong\Goods;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 京粉精选商品查询接口
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function jingfen() {
        $param = [
            'method' => 'jd.union.open.goods.jingfen.query',
            'goodsReq' => [
                'eliteId' => 2,
                'pageSize' => 1,
                'pid' => ''
            ],
        ];
        return $this->httpGet('', $param);
    }

    /**
     * 关键词商品查询接口【申请】
     * @url https://union.jd.com/openplatform/api/10420
     * @param array $param
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function query(array $param = []) {
        $options = [
            'method' => 'jd.union.open.goods.query',
            'goodsReqDTO' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 猜你喜欢商品推荐
     * @url https://union.jd.com/openplatform/api/13625
     * @param array $param
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function material(array $param = []) {
        $options = [
            'method' => 'jd.union.open.goods.material.query',
            'goodsReq' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 根据skuid查询商品信息接口
     * @url https://union.jd.com/openplatform/api/10422
     * @param string $param
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function promotiongoodsinfo(string $param) {
        $options = [
            'method' => 'jd.union.open.goods.promotiongoodsinfo.query',
            'skuIds' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 商品详情查询接口
     * @url https://union.jd.com/openplatform/api/11248
     * @param array $param
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function bigfield(array $param = []) {
        $options = [
            'method' => 'jd.union.open.goods.bigfield.query',
            'goodsReq' => $param,
        ];

        return $this->httpGet('', $options);
    }
}
