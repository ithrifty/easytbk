# 介绍
淘宝联盟(大淘客)、京东联盟、多多进宝、苏宁推客SDK封装，该项目长期维护，如发现问题，请提交PR。

# 联系方式
暂无

# 安装
1、通过 composer 安装扩展包

```bash
composer require ithrifty/easytbk
```

## 参数
```
<?php
return [
    // 大淘客
    'tbk' => [
        'app_key' => '5fda0d0712856',
        'app_secret' => 'f1ee1a9e3f821529d8816b957c9426d9',
        'response_type' => 'raw',
    ],
    'jd' => [
        'app_key' => 'e12dc1bdbcd219e02f6edd4323b0078f',
        'app_secret' => 'a1a814e2944042f6ab883538ef4aeae9',
        'response_type' => 'raw',
    ],
    'pdd' => [
        'client_id' => '9fe2a081a6da4eb0b7b8840cce9f085e',
        'client_secret' => '4c9d3acc3289ed6d45b91e023868935f28b9b837',
        'response_type' => 'raw',
    ],
    'suning' => [
        'AppKey' => '78f10d46bee670023ff551c14e484683',
        'AppSecret' => '3436a382f7cdeb603da1d4f26f8c6c01',
        'response_type' => 'raw',
    ],
];
```


## 初始化SDK
每个平台SDK的具体调用方法参考各平台的文档

1、淘宝SDK初始化

```php
<?php
use EasyTBK\Factory;
$client = Factory::taobao(config['tbk']);
```

2、京东SDK初始化
```php
<?php
use EasyTBK\Factory;

$client = Factory::jingdong(config['jd']);
```

3、拼多多SDK初始化
```php
<?php
use EasyTBK\Factory;

$client = Factory::pinduoduo(config['pdd']);
```

5、苏宁连联盟SDK初始化
```php
<?php
use EasyTBK\Factory;

$client = Factory::suning(config['suning']);
```

## 示例
### 京东调用猜你喜欢
```
<?php
use EasyTBK\Factory;
$jd = Factory::jingdong(config('jd'));
$response = $jd->goods->material([
    'eliteId' => 1,
]);
return $response;
```