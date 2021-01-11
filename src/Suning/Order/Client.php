<?php
namespace EasyTBK\Suning\Order;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 订单结算信息
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.ordersettlenew.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrdersettlenew(String $orderLineNumber) {
        $this->app->config->AppMethod = 'suning.netalliance.ordersettlenew.get';
        $this->app->config->ReqMethod = 'getOrdersettlenew';
        $param['orderLineNumber'] = $orderLineNumber;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.ordersettlenew.get',$param);
    }

    /**
     * 风控订单查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.riskmanagementorder.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryRiskmanagementorder(String $startTime, String $endTime, String $pageNo, String $pageSize) {
        $this->app->config->AppMethod = 'suning.netalliance.riskmanagementorder.query';
        $this->app->config->ReqMethod = 'queryRiskmanagementorder';
        $param['startTime'] = $startTime;
        $param['endTime'] = $endTime;
        $param['pageNo'] = $pageNo;
        $param['pageSize'] = $pageSize;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.riskmanagementorder.query',$param);
    }

    /**
     * 企业活动订单查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.enterprisedetails.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryEnterprisedetails(String $activityCode, String $startNo, String $startTime, String $endTime, String $size) {
        $this->app->config->AppMethod = 'suning.netalliance.enterprisedetails.query';
        $this->app->config->ReqMethod = 'queryEnterprisedetails';
        $param['startTime'] = $startTime;
        $param['endTime'] = $endTime;
        $param['activityCode'] = $activityCode;
        $param['startNo'] = $startNo;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.enterprisedetails.query',$param);
    }

    /**
     * 网盟订单信息单独查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.order.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrder(String $orderCode, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.order.get';
        $this->app->config->ReqMethod = 'getOrder';
        $param['orderCode'] = $orderCode;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.order.get',$param);
    }

    /**
     * 订单批量查询接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.orderinfo.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryOrderinfo(Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.orderinfo.query';
        $this->app->config->ReqMethod = 'queryOrderinfo';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.orderinfo.query',$param);
    }

    /**
     * 网盟订单信息批量查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.order.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryOrder(String $startTime, String $endTime, String $pageNo, String $pageSize, Array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.order.query';
        $this->app->config->ReqMethod = 'queryOrder';
        $param['startTime'] = $startTime;
        $param['endTime'] = $endTime;
        $param['pageNo'] = $pageNo;
        $param['pageSize'] = $pageSize;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.order.query',$param);
    }

    /**
     * 网盟订单结算信息查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.ordersettle.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrdersettle(String $orderLineNumber) {
        $this->app->config->AppMethod = 'suning.netalliance.ordersettle.get';
        $this->app->config->ReqMethod = 'getOrdersettle';
        $param['orderLineNumber'] = $orderLineNumber;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.ordersettle.get',$param);
    }




}
