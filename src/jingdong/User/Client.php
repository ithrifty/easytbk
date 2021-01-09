<?php
namespace EasyTBK\Jingdong\User;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 京东注册用户判定接口【申请】
     * @url https://union.jd.com/openplatform/api/14706
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function registerValidate(array $param) {
        $options = [
            'method' => 'jd.union.open.user.register.validate',
            'userStateReq' => $param,
        ];
        return $this->httpGet('', $options);
    }


    /**
     * 获取PID【申请】
     * @url https://union.jd.com/openplatform/api/10430
     * @param array $param
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function pid(array $param) {
        $options = [
            'method' => 'jd.union.open.user.pid.get',
            'pidReq' => $param,
        ];
        return $this->httpGet('', $options);
    }




}
