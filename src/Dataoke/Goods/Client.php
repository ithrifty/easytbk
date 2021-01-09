<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Dataoke\Goods;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 淘口令解析
     * @url http://www.dataoke.com/kfpt/api-d.html?id=26
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function parseTaokouling(string $content) {
        $param['content'] = $content;
        return $this->httpGet('/api/tb-service/parse-taokouling', $param);
    }

    /**
     * 淘系万能解析
     * @url http://www.dataoke.com/kfpt/api-d.html?id=33
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function parseContent(string $content) {
        $param['content'] = $content;
        return $this->httpGet('/api/tb-service/parse-content', $param);
    }

    /**
     * 淘口令转淘口令
     * @url http://www.dataoke.com/kfpt/api-d.html?id=30
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function twdToTwd(string $content, array $param = []) {
        $param['content'] = $content;
        return $this->httpGet('/api/tb-service/twd-to-twd', $param);
    }

    /**
     * 淘口令生成
     * @url http://www.dataoke.com/kfpt/api-d.html?id=28
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function creatTaokouling(string $text, string $url, array $param = []) {
        $param['text'] = $text;
        $param['url'] = $url;
        return $this->httpGet('/api/tb-service/creat-taokouling', $param);
    }

    /**
     * 高效转链
     * @url http://www.dataoke.com/kfpt/api-d.html?id=7
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPrivilegeLink(int $goodsId, array $param = []) {
        $param['goodsId'] = $goodsId;
        return $this->httpGet('/api/tb-service/get-privilege-link', $param);
    }

    /**
     * 商品列表
     * @url http://www.dataoke.com/kfpt/api-d.html?id=5
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGoodsList(int $pageId, array $param = []) {
        $param['pageId'] = $pageId;
        $param['version'] = 'v1.2.4';
        return $this->httpGet('/api/goods/get-goods-list', $param);
    }

    /**
     * 商品列表
     * @url http://www.dataoke.com/kfpt/api-d.html?id=8
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGoodsDetails(int $id = null, int $goodsId = null) {
        $param['id'] = $id;
        $param['goodsId'] = $goodsId;
        $param['version'] = 'v1.2.3';
        return $this->httpGet('/api/goods/get-goods-details', $param);
    }







}
