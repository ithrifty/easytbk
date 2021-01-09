<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Pinduoduo\Pid;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * 创建推广位
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.pid.generate
     * @param int $number 生成数量
     * @param array   $p_id_name_list 名称
     * @param int $media_id 媒体ID
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function generate($number = 10, array $p_id_name_list = [], int $media_id = 0) {
        $param['type'] = 'pdd.ddk.goods.pid.generate';
        $param['number'] = $number;
        $param['p_id_name_list'] = $p_id_name_list;
        $param['media_id'] = $media_id;
        return $this->httpGet('', $param);
    }

    /**
     * 查询推广位
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.goods.pid.query
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function query(array $param) {
        $param['type'] = 'pdd.ddk.goods.pid.query';
        return $this->httpGet('', $param);
    }

    /**
     * 存量推广位批量绑定媒体备案
     * @url https://jinbao.pinduoduo.com/third-party/api-detail?apiName=pdd.ddk.pid.mediaid.bind
     * @param int $media_id 媒体ID
     * @param array $pid_list 推广位列表
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function mediaidBind(int $media_id, array $pid_list) {
        $param['type'] = 'pdd.ddk.pid.mediaid.bind';
        return $this->httpGet('', $param);
    }
}
