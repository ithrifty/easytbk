<?php
namespace EasyTBK\Suning\Juin;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 单笔查询大聚会商品信息
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.juinfomation.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getJuInfomation(String $commCode) {
        $this->app->config->AppMethod = 'suning.netalliance.juinfomation.get';
        $this->app->config->ReqMethod = 'getJuInfomation';
        $param['commCode'] = $commCode;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.juinfomation.get',$param);
    }

    /**
     * 批量查询大聚会商品信息
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.juinfomation.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryJuInfomation(String $pageSize, String $pageNo) {
        $this->app->config->AppMethod = 'suning.netalliance.juinfomation.query';
        $this->app->config->ReqMethod = 'queryJuInfomation';
        $param['pageSize'] = $pageSize;
        $param['pageNo'] = $pageNo;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.juinfomation.query',$param);
    }

}
