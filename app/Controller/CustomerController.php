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
namespace App\Controller;

use App\Events\CustomerRegister;
use App\Middleware\Auth\CustomerMiddleware;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\Middlewares;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Class CustomerController.
 * @Controller
 */
class CustomerController extends AbstractController
{
    /**
     * @Inject
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    /**
     * @RequestMapping(path="register", methods="get,post")
     * @Middlewares({
     *     @Middleware(CustomerMiddleware::class)
     * })
     */
    public function register()
    {
        $userId = $this->request->input('id');

        // 这里 dispatch(object $event) 会逐个运行监听该事件的监听器
        $this->eventDispatcher->dispatch(new CustomerRegister($userId));

        return $userId;
    }
}
