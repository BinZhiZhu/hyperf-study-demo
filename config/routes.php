<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

//Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::addRoute(['GET', 'POST', 'HEAD'], '/test', 'App\Controller\IndexController::test');

//Router::get('/test', 'App\Controller\IndexController@test');
Router::get('/echo', 'App\Controller\IndexController@echo');

//多端口监听
Router::addServer('innerHttp', function () {
    Router::get('/', 'App\Controller\IndexController@index');
});

Router::get('/favicon.ico', function () {
    return '';
});
