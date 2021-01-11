<?php
namespace EasyTBK\Dataoke\Search;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * 联想词
     * @url http://www.dataoke.com/kfpt/api-d.html?id=18
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function suggestion($keyWords = 3, $type = 3) {
        $param['keyWords'] = $keyWords;
        $param['type'] = $type;
        $param['version'] = 'v1.0.2';
        return $this->httpGet('/api/goods/search-suggestion', $param);
    }

    /**
     * 超级搜索
     * @url http://www.dataoke.com/kfpt/api-d.html?id=14
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function goods($keyWords = 3, $type = 3, $pageId = 1, $pageSize = 12, $param) {
        $param['keyWords'] = $keyWords;
        $param['type'] = $type;
        $param['pageId'] = $pageId;
        $param['pageSize'] = $pageSize;
        $param['version'] = 'v1.3.0';
        return $this->httpGet('/api/goods/list-super-goods', $param);
    }

    /**
     * 超级搜索
     * @url http://www.dataoke.com/kfpt/api-d.html?id=9
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function dtkSearchGoods($keyWords = 3, $pageId = 1, $pageSize = 12, $param) {
        $param['keyWords'] = $keyWords;
        $param['pageId'] = $pageId;
        $param['pageSize'] = $pageSize;
        $param['version'] = 'v2.1.2';
        return $this->httpGet('/api/goods/get-dtk-search-goods', $param);
    }

    /**
     * 热搜记录
     * @url http://www.dataoke.com/kfpt/api-d.html?id=4
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function top100($param = []) {
        $param['version'] = 'v1.0.1';
        return $this->httpGet('/api/category/get-top100', $param);
    }

    /**
     * 联盟搜索
     * @url http://www.dataoke.com/kfpt/api-d.html?id=13
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function tbSearch($keyWords = 3, $pageId = 1, $pageSize = 12, $param) {
        $param['keyWords'] = $keyWords;
        $param['pageId'] = $pageId;
        $param['pageSize'] = $pageSize;
        $param['version'] = 'v2.1.0';
        return $this->httpGet('/api/tb-service/get-tb-service', $param);
    }
}
