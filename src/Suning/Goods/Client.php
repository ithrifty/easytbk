<?php
namespace EasyTBK\Suning\Goods;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * 获取吊起链接接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.hoistinglink.query
     * @param string $goodsCode 商品编码
     * @param string $mertCode  商家编码
     * @param string $adBookId  推广位
     * @param array  $param     拓展参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryHoistinglink(string $goodsCode, string $mertCode, string $adBookId, array $param) {
        $this->app->config->AppMethod = 'suning.netalliance.hoistinglink.query';
        $this->app->config->ReqMethod = 'queryHoistinglink';
        $param['goodsCode'] = $goodsCode;
        $param['mertCode'] = $mertCode;
        $param['adBookId'] = $adBookId;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.hoistinglink.query', $param);
    }


    /**
     * 微博商品信息查询和转链
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.weiboproductinfo.get
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function weiboProductInfo(string $detailUrl) {
        $this->app->config->AppMethod = 'suning.netalliance.weiboproductinfo.get';
        $this->app->config->ReqMethod = 'getWeiboproductinfo';
        $param['detailUrl'] = $detailUrl;
        $param['isGetBuyUrl'] = '';
        $param['isShare'] = '';
        $param['subUser'] = '';
        $param['wbShareId'] = '';
        $param['custNum'] = '';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.weiboproductinfo.get', $param);
    }

    /**
     * 团长招商批量查询联盟商品信息
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.hoistinglink.query
     * @param string $pageNo    当前页码
     * @param string $mertCode  每页数量
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCustnumandcommdity(string $pageNo, string $pageSize) {
        $this->app->config->AppMethod = 'suning.netalliance.custnumandcommdity.query';
        $this->app->config->ReqMethod = 'queryCustnumandcommdity';
        $param['pageNo'] = $pageNo;
        $param['mertCode'] = $pageSize;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.custnumandcommdity.query', $param);
    }

    /**
     * 小编推荐
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.recommendcommodity.query
     * @param array $param    业务参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryRecommendcommodity(array $param = []) {
        $this->app->config->AppMethod = 'suning.netalliance.recommendcommodity.query';
        $this->app->config->ReqMethod = 'queryRecommendcommodity';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.recommendcommodity.query', $param);
    }

    /**
     * 商品和券二合一接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.extensionlink.get
     * @param array $param    业务参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getExtensionlink(array $param = []) {
        $this->app->config->AppMethod = 'suning.netalliance.extensionlink.get';
        $this->app->config->ReqMethod = 'getExtensionlink';
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.extensionlink.get', $param);
    }

    /**
     * 商品精选接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.selectrecommendcommodity.query
     * @param string $eliteId   场景ID （1：小编推荐；2：实时热销榜；3：当日热推榜；4：高佣爆款榜；5：团长招商榜；6：9块9专区）
     * @param string $pageIndex 当前页码
     * @param array $param      业务参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function querySelectrecommendcommodity($eliteId = 1, $pageIndex = 1, array $param = []) {
        $this->app->config->AppMethod = 'suning.netalliance.selectrecommendcommodity.query';
        $this->app->config->ReqMethod = 'querySelectrecommendcommodity';
        $param['eliteId'] = $eliteId;
        $param['pageIndex'] = $pageIndex;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.selectrecommendcommodity.query', $param);
    }

    /**
     * 关键字商品查询接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.searchcommoditynew.query
     * @param string $keyword   关键字
     * @param string $pageIndex 当前页码
     * @param array $param      业务参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function querySearchcommoditynew($keyword = '', $pageIndex = 1, array $param = []) {
        $this->app->config->AppMethod = 'suning.netalliance.searchcommoditynew.query';
        $this->app->config->ReqMethod = 'querySelectrecommendcommodity';
        $param['keyword'] = $keyword;
        $param['pageIndex'] = $pageIndex;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.searchcommoditynew.query', $param);
    }

    /**
     * 关联商品推荐接口
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.morerecommend.get
     * @param string $keyword   商品编码
     * @param string $pageIndex 商家编码
     * @param array $param      业务参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getMorerecommend($commodityCode = '', $supplierCode = '', array $param = []) {
        $this->app->config->AppMethod = 'suning.netalliance.morerecommend.get';
        $this->app->config->ReqMethod = 'getMorerecommend';
        $param['commodityCode'] = $commodityCode;
        $param['supplierCode'] = $supplierCode;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.morerecommend.get', $param);
    }

    /**
     * 商品图文详情查询
     * @url https://open.suning.com/ospos/apipage/toApiMethodDetailMenuNew.do?interCode=suning.netalliance.commodityimages.query
     * @param string $keyword   商品编码
     * @param string $pageIndex 商家编码
     * @param array $param      业务参数
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCommodityimages($commodityCode = '', $supplierCode = '', int $terminalType = 0) {
        $this->app->config->AppMethod = 'suning.netalliance.commodityimages.query';
        $this->app->config->ReqMethod = 'queryCommodityimages';
        $param['commodityCode'] = $commodityCode;
        $param['supplierCode'] = $supplierCode;
        $param['terminalType'] = $terminalType;
        return $this->httpPost('/api/http/sopRequest/suning.netalliance.commodityimages.query', $param);
    }




}
