<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
namespace App\Middleware\Auth;

use Hyperf\HttpServer\Contract\ResponseInterface as HttpResponse;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class CustomerMiddleware.
 */
class CustomerMiddleware
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var HttpResponse
     */
    protected $response;

    /**
     * CustomerMiddleware constructor.
     */
    public function __construct(ContainerInterface $container, HttpResponse $response)
    {
        $this->container = $container;
        $this->response = $response;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        //针对于request做一次拦截
        var_dump('--中间件拦截--', $request->getQueryParams());
        $queryParams = $request->getQueryParams();
        if (! isset($queryParams['token']) && ! $queryParams['token']) {
            return $this->response->json([
                'code' => -1,
                'msg' => '请求非法，请携带token',
            ]);
        }

        return $handler->handle($request);
    }
}
