<?php
namespace EasyTBK;

/**
 * Class Factory.
 *
 * @method TaoBao taobao()
 * @method PinDuoDuo pinduoduo()
 * @method JingDong jingdong()
 * @method Vip vip()
 * @method SuNing suning()
 */
class Factory
{

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }


    /**
     * @param $name
     * @param array $config
     * @return mixed
     */
    public function make($name, array $config = [])
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\EasyTBK\\{$namespace}\\Application";
        return new $application($config);
    }





}
