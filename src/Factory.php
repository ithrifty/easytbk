<?php
namespace EasyTBK;

/**
 * Class Factory.
 *
 * @method static \EasyTBK\Dataoke\Application      dataoke(array $config)
 * @method static \EasyTBK\Jingdong\Application     jingdong(array $config)
 * @method static \EasyTBK\Pinduoduo\Application    pinduoduo(array $config)
 * @method static \EasyTBK\Suning\Application       suning(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array  $config
     *
     * @return \EasyTBK\Kernel\ServiceContainer
     */
    public static function make($name, array $config)
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\EasyTBK\\{$namespace}\\Application";

        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
