<?php
namespace Ithrifty\EasyTBK\Jingdong\Goods;
use Hanson\Foundation\AbstractAPI;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}.
     */
    public function register(Container $app)
    {
        $app['menu'] = function ($app) {
            return new Client($app);
        };
    }
}