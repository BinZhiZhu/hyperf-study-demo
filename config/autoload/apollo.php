<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
return [
    'enable' => false,
    'server' => env('APOLLO_SERVER', 'http://127.0.0.1:8080'),
    'appid' => 'Your APP ID',
    'cluster' => 'default',
    'namespaces' => [
        'application',
    ],
    'interval' => 5,
    'strict_mode' => false,
];
