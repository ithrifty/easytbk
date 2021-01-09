<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Dataoke\Order;

use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{
    /**
     * 订单查询接口
     * @url http://www.dataoke.com/kfpt/api-d.html?id=27
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrderDetails($queryType = 3, string $startTime, string $endTime, $param) {
        $param['queryType'] = $queryType;
        $param['startTime'] = $startTime;
        $param['endTime'] = $endTime;
        return $this->httpGet('/api/tb-service/get-order-details', $param);
    }
}
