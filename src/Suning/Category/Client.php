<?php
namespace EasyTBK\Suning\Category;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 高佣专区类目查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.inverstmentcategoryid.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryInverstmentcategoryid() {
        $this->app->config->AppMethod = 'suning.netalliance.inverstmentcategoryid.query';
        $this->app->config->ReqMethod = 'queryInverstmentcategoryid';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.inverstmentcategoryid.query',[]);
    }




}
