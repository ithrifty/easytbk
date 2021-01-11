<?php
namespace EasyTBK\Suning\Promotion;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 获取商品或店铺推广链接
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.storepromotionurl.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryStorepromotionurl($mertCode, $adBookId, $commCode, array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.storepromotionurl.query';
        $this->app->config->ReqMethod = 'queryStorepromotionurl';
        $param['mertCode'] = $mertCode;
        $param['adBookId'] = $adBookId;
        $param['commCode'] = $commCode;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.storepromotionurl.query',$param);
    }

    /**
     * 获取自定义推广链接
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.custompromotionurl.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCustompromotionurl($visitUrl, array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.custompromotionurl.query';
        $this->app->config->ReqMethod = 'queryCustompromotionurl';
        $param['visitUrl'] = $visitUrl;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.custompromotionurl.query',$param);
    }

    /**
     * 推广链接更新
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.kuaishounewpromotionurl.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getKuaishounewpromotionurl($itemKey, array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.kuaishounewpromotionurl.get';
        $this->app->config->ReqMethod = 'getKuaishounewpromotionurl';
        $param['itemKey'] = $itemKey;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.kuaishounewpromotionurl.get',$param);
    }

    /**
     * 商品和券二合一
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.appletextensionlink.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAppletextensionlink(array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.appletextensionlink.get';
        $this->app->config->ReqMethod = 'getAppletextensionlink';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.appletextensionlink.get',$param);
    }

    /**
     * 获取营销活动推广链接
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.enterpriseyfgprourl.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getEnterpriseyfgprourl($actCode = '', $proType = '', array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.enterpriseyfgprourl.get';
        $this->app->config->ReqMethod = 'getEnterpriseyfgprourl';
        $param['actCode'] = $actCode;
        $param['proType'] = $proType;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.enterpriseyfgprourl.get',$param);
    }

    /**
     * 获取首页推广权限的推广位链接
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.homepagepositionurl.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryHomepagepositionurl($subUser = '') {
        $this->app->config->AppMethod = 'suning.netalliance.homepagepositionurl.query';
        $this->app->config->ReqMethod = 'queryHomepagepositionurl';
        $param['subUser'] = $subUser;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.homepagepositionurl.query',$param);
    }

    /**
     * 第三方平台获取联盟短链参数
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.thirdpartygetpromotion.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getThirdpartygetpromotion(String $outerId, String $channel, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.thirdpartygetpromotion.get';
        $this->app->config->ReqMethod = 'getThirdpartygetpromotion';
        $param['outerId'] = $outerId;
        $param['channel'] = $channel;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.thirdpartygetpromotion.get',$param);
    }

    /**
     * 抖音获取苏宁推客推广参数
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.tiktokgetunion.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getTiktokgetunion(String $outerId, String $channel, String $statParam, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.tiktokgetunion.get';
        $this->app->config->ReqMethod = 'getTiktokgetunion';
        $param['outerId'] = $outerId;
        $param['channel'] = $channel;
        $param['statParam'] = $statParam;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.tiktokgetunion.get',$param);
    }

    /**
     * 批量创建聊天工具推广位
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.promotion.create
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createPromotion(String $webSiteId, String $positionNames) {
        $this->app->config->AppMethod = 'suning.netalliance.promotion.create';
        $this->app->config->ReqMethod = 'createPromotion';
        $param['webSiteId'] = $webSiteId;
        $param['positionNames'] = $positionNames;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.promotion.create',$param);
    }

    /**
     * 批量转链
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.bacthcustomlink.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryBacthcustomlink(String $extend, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.bacthcustomlink.query';
        $this->app->config->ReqMethod = 'queryBacthcustomlink';
        $param['extend'] = $extend;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.bacthcustomlink.query',$param);
    }

    /**
     * 查询活动推广效果
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.querypacket.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryQuerypacket(String $activityId) {
        $this->app->config->AppMethod = 'suning.netalliance.querypacket.query';
        $this->app->config->ReqMethod = 'queryQuerypacket';
        $param['activityId'] = $activityId;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.querypacket.query',$param);
    }

}
