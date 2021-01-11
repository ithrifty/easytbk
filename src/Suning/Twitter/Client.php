<?php
namespace EasyTBK\Suning\Twitter;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 查询推荐链接接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.twittershareurl.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryTwittershareurl(String $goodsNo) {
        $this->app->config->AppMethod = 'suning.netalliance.twittershareurl.query';
        $this->app->config->ReqMethod = 'queryTwittershareurl';
        $param['goodsNo'] = $goodsNo;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.twittershareurl.query', $param);
    }

    /**
     * 查询推广成功信息
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.twittersuccess.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryTwittersuccess(String $beginDate, String $endDate, String $pageNo) {
        $this->app->config->AppMethod = 'suning.netalliance.twittersuccess.query';
        $this->app->config->ReqMethod = 'queryTwittersuccess';
        $param['beginDate'] = $beginDate;
        $param['endDate'] = $endDate;
        $param['pageNo'] = $pageNo;
        $param['pageSize'] = $pageSize;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.twittersuccess.query', $param);
    }

}
