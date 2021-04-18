<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
use Hyperf\HttpServer\Router\Router;

//Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
//Router::addRoute(['GET', 'POST', 'HEAD'], '/test', 'App\Controller\IndexController::test');

//Router::addRoute(['GET', 'HEAD'], '/test/{id:\d+}', [\App\Controller\TestController::class, 'index']);

//Router::get('/test', 'App\Controller\IndexController@test');
Router::get('/echo', 'App\Controller\IndexController@echo');

//多端口监听
Router::addServer('innerHttp', function () {
    Router::get('/', 'App\Controller\IndexController@index');
});

Router::get('/favicon.ico', function () {
    return '';
});

//ws路由定义
Router::addServer('ws', function () {
    Router::get('/', 'App\Controller\WebSocketController');
});
