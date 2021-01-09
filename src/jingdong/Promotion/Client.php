<?php
namespace EasyTBK\Jingdong\Promotion;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 网站/APP获取推广链接接口
     * @url https://union.jd.com/openplatform/api/10421
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function common(array $param) {
        $options = [
            'method' => 'jd.union.open.activity.query',
            'promotionCodeReq' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 社交媒体获取推广链接接口【申请】
     * @url https://union.jd.com/openplatform/api/10424
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function bysubunionid(array $param) {
        $options = [
            'method' => 'jd.union.open.promotion.bysubunionid.get',
            'promotionCodeReq' => $param,
        ];
        return $this->httpGet('', $options);
    }

    /**
     * 工具商获取推广链接接口【申请】
     * @url https://union.jd.com/openplatform/api/10425
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function byunionid(array $param) {
        $options = [
            'method' => 'jd.union.open.promotion.byunionid.get',
            'promotionCodeReq' => $param,
        ];
        return $this->httpGet('', $options);
    }
}
