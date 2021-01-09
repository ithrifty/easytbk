<?php
namespace EasyTBK\Jingdong\Coupon;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 优惠券领取情况查询接口【申请】
     * @url https://union.jd.com/openplatform/api/10423
     * @param int $parentId
     * @param int $grade
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function query(string $couponUrl) {
        $options = [
            'method' => 'jd.union.open.category.goods.get',
            'couponUrls' => [
                'couponUrl' => $couponUrl,
            ],
        ];
        return $this->httpGet('', $options);
    }
}
