<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 */
return [
    'http' => [
        //        \App\Middleware\Auth\CustomerMiddleware::class
        \App\Middleware\Request\CrosMiddleware::class,
    ],
];
