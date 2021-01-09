<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyTBK\Kernel;

use EasyTBK\Kernel\Providers\ConfigServiceProvider;
use EasyTBK\Kernel\Providers\EventDispatcherServiceProvider;
use EasyTBK\Kernel\Providers\ExtensionServiceProvider;
use EasyTBK\Kernel\Providers\HttpClientServiceProvider;
use EasyTBK\Kernel\Providers\LogServiceProvider;
use EasyTBK\Kernel\Providers\RequestServiceProvider;
use EasyWeChatComposer\Traits\WithAggregator;
use Pimple\Container;

/**
 * Class ServiceContainer.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \EasyWeChat\Kernel\Config                          $config
 * @property \Symfony\Component\HttpFoundation\Request          $request
 * @property \GuzzleHttp\Client                                 $http_client
 * @property \Monolog\Logger                                    $logger
 * @property \Symfony\Component\EventDispatcher\EventDispatcher $events
 */
class ServiceContainer extends Container
{
    use WithAggregator;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var array
     */
    protected $defaultConfig = [];

    /**
     * @var array
     */
    protected $userConfig = [];

    /**
     * Constructor.
     *
     * @param array       $config
     * @param array       $prepends
     * @param string|null $id
     */
    public function __construct(array $config = [], array $prepends = [], string $id = null)
    {
        $this->userConfig = $config;
        parent::__construct($prepends);

        $this->registerProviders($this->getProviders());

        $this->id = $id;

        $this->aggregate();

        $this->events->dispatch(new Events\ApplicationInitialized($this));
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id ?? $this->id = md5(json_encode($this->userConfig));
    }

    /**
     * @return array
     */
    public function getConfig()
    {
        $base = [
            // http://docs.guzzlephp.org/en/stable/request-options.html
            'http' => [
                'timeout' => 30.0,
                'base_uri' => 'https://api.weixin.qq.com/',
            ],
        ];

        return array_replace_recursive($base, $this->defaultConfig, $this->userConfig);
    }

    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge([
            ConfigServiceProvider::class,
            LogServiceProvider::class,
            RequestServiceProvider::class,
            HttpClientServiceProvider::class,
            ExtensionServiceProvider::class,
            EventDispatcherServiceProvider::class,
        ], $this->providers);
    }

    /**
     * @param string $id
     * @param mixed  $value
     */
    public function rebind($id, $value)
    {
        $this->offsetUnset($id);
        $this->offsetSet($id, $value);
    }

    /**
     * Magic get access.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        if ($this->shouldDelegate($id)) {
            return $this->delegateTo($id);
        }

        return $this->offsetGet($id);
    }

    /**
     * Magic set access.
     *
     * @param string $id
     * @param mixed  $value
     */
    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}
