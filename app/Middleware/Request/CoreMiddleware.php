<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
namespace App\Middleware\Request;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;

/**
 * Class CoreMiddleware.
 */
class CoreMiddleware extends \Hyperf\HttpServer\CoreMiddleware implements MiddlewareInterface
{
    /**
     * @return array|\Hyperf\Utils\Contracts\Arrayable|mixed|\Psr\Http\Message\ResponseInterface|string|void
     */
    protected function handleNotFound(ServerRequestInterface $request)
    {
        // 重写路由找不到的处理逻辑
        return $this->response()->withStatus(404);
    }

    /**
     * @return array|\Hyperf\Utils\Contracts\Arrayable|mixed|\Psr\Http\Message\ResponseInterface|string|void
     */
    protected function handleMethodNotAllowed(array $methods, ServerRequestInterface $request)
    {
        // 重写 HTTP 方法不允许的处理逻辑
        return $this->response()->withStatus(405);
    }
}
