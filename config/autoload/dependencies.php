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
return [
    //Hyperf 支持监听多个端口，但因为 callbacks 中的对象直接从容器中获取，所以相同的 Hyperf\HttpServer\Server::class 会在容器中被覆盖。所以我们需要在依赖关系中，重新定义 Server，确保对象隔离。

    'InnerHttp' => Hyperf\HttpServer\Server::class,
    \App\Interfaces\CustomerServiceInterface::class => \App\Components\CustomerService::class,
];
