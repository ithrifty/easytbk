<?php
namespace EasyTBK\Suning\Coupon;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 获取优惠券商品
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.couponproduct.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCouponproduct() {
        $this->app->config->AppMethod = 'suning.netalliance.couponproduct.query';
        $this->app->config->ReqMethod = 'queryCouponproduct';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.couponproduct.query',[]);
    }

}
