<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Suning\Activity;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 获取推广中的招商活动
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.merchantactivity.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryMerchantactivity(Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.merchantactivity.query';
        $this->app->config->ReqMethod = 'queryMerchantactivity';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.merchantactivity.query',$param);
    }

    /**
     * 获取活动推广效果
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.companyachievements.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCompanyachievements(String $activityCode, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.companyachievements.query';
        $this->app->config->ReqMethod = 'queryCompanyachievements';
        $param['activityCode'] = $activityCode;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.companyachievements.query',$param);
    }

    /**
     * 获取活动推广效果
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.merchantcommodity.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryMerchantcommodity(String $activityId, String $adBookId, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.merchantcommodity.query';
        $this->app->config->ReqMethod = 'queryMerchantcommodity';
        $param['activityId'] = $activityId;
        $param['adBookId'] = $adBookId;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.merchantcommodity.query',$param);
    }

    /**
     * 提供城市攻略推广数据给机构
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.citystrategycorpinfo.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCitystrategycorpinfo(String $strategyNo, String $pageNo, Array $pageSize) {
        $this->app->config->AppMethod = 'suning.netalliance.citystrategycorpinfo.query';
        $this->app->config->ReqMethod = 'queryCitystrategycorpinfo';
        $param['strategyNo'] = $strategyNo;
        $param['pageNo'] = $pageNo;
        $param['pageSize'] = $pageSize;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.citystrategycorpinfo.query',$param);
    }

}
