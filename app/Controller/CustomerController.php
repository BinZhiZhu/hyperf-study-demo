<?php

namespace App\Controller;

use App\Events\CustomerRegister;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Psr\EventDispatcher\EventDispatcherInterface;

/**
 * Class CustomerController
 * @package App\Controller
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
     */
    public function register()
    {
        $userId = 123;

        // 这里 dispatch(object $event) 会逐个运行监听该事件的监听器
        $this->eventDispatcher->dispatch(new CustomerRegister($userId));

        return $userId;
    }
}