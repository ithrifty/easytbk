<?php
namespace EasyTBK\Jingdong\Category;
use EasyTBK\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends BaseClient
{

    /**
     * 商品类目查询接口
     * @url https://union.jd.com/openplatform/api/10434
     * @param int $parentId
     * @param int $grade
     * @return array|\EasyTBK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \EasyTBK\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function goods(int $parentId = 0, int $grade = 0) {
        $param = [
            'method' => 'jd.union.open.category.goods.get',
            'req' => [
                'parentId' => 0,
                'grade' => 0,
            ],
        ];
        return $this->httpGet('', $param);
    }
}
