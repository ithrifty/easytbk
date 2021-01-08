<?php
/**
 * Created by PhpStorm.
 * User: niugengyun
 * Date: 2019/1/8
 * Time: 13:56
 * https://router.jd.com/api?v=1.0&method=jd.union.open.goods.query&access_token=&app_key=ab2ef93a20a5492d8b0dad11ad34b256&sign_method=md5&format=json&timestamp=2019-01-08 14:57:08&sign=B7B42BB545958BBA25DD795FFEDD35E2&param_json={"goodsReqDTO":{"keyword":"女装"}}
 */

namespace Ithrifty\EasyTBK\JingDong;
use Hanson\Foundation\Foundation;

class Application extends Foundation
{
    /**
     * @var array
     */
    protected $providers = [
        Goods\ServiceProvider::class,
    ];
}
