<?php
namespace EasyTBK\Jingdong\Position;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 查询推广位【申请】
     * @url https://union.jd.com/openplatform/api/10428
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function query(array $param) {
        $options = [
            'method' => 'jd.union.open.position.query',
            'positionReq' => $param,
        ];
        return $this->httpGet('', $options);
    }


    /**
     * 创建推广位【申请】
     * @url https://union.jd.com/openplatform/api/10429
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create(array $param) {
        $options = [
            'method' => 'jd.union.open.position.create',
            'positionReq' => $param,
        ];
        return $this->httpGet('', $options);
    }




}
