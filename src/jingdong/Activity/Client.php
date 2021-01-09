<?php
namespace EasyTBK\Jingdong\Activity;
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
     * @url https://union.jd.com/openplatform/api/12667
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function query(array $param) {
        $options = [
            'method' => 'jd.union.open.activity.query',
            'activityReq' => $param,
        ];
        return $this->httpGet('', $options);
    }
}
