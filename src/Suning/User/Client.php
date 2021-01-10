<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Suning\User;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 更新会员的等级和成长值
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.level.modify
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCouponproduct(String $custNo, String $growthValue, String $level) {
        $this->app->config->AppMethod = 'suning.netalliance.level.modify';
        $this->app->config->ReqMethod = 'queryCouponproduct';
        $param['custNo'] = $custNo;
        $param['growthValue'] = $growthValue;
        $param['level'] = $level;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.level.modify',$param);
    }

    /**
     * 联盟会员校验接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.unionmember.confirm
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function confirmUnionmember(Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.unionmember.confirm';
        $this->app->config->ReqMethod = 'confirmUnionmember';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.unionmember.confirm',$param);
    }

    /**
     * 联盟会员校验接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.tutor.modify
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function modifyTutor(String $custNo, String $tutorCustNo) {
        $this->app->config->AppMethod = 'suning.netalliance.tutor.modify';
        $this->app->config->ReqMethod = 'modifyTutor';
        $param['custNo'] = $custNo;
        $param['tutorCustNo'] = $tutorCustNo;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.tutor.modify',$param);
    }

}
