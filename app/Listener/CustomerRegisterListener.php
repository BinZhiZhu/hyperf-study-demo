<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 */
namespace App\Listener;

use App\Events\CustomerRegister;
use App\Interfaces\CustomerServiceInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * Class CustomerRegisterListener.
 * @Listener
 */
class CustomerRegisterListener implements ListenerInterface
{
    /**
     * @Inject
     * @var CustomerServiceInterface
     */
    protected $customerService;

    /**
     * @return string[] returns the events that you want to listen
     */
    public function listen(): array
    {
        // 返回一个该监听器要监听的事件数组，可以同时监听多个事件
        return [
            CustomerRegister::class,
        ];
    }

    /**
     * Handle the Event when the event is triggered, all listeners will
     * complete before the event is returned to the EventDispatcher.
     */
    public function process(object $event)
    {
        // 事件触发后该监听器要执行的代码写在这里，比如该示例下的发送用户注册成功短信等
        // 直接访问 $event 的 user 属性获得事件触发时传递的参数值
        // $event->user;
        $userId = $event->userId;
        $userId = intval($userId);

        $user = $this->customerService->getCustomer($userId);

        //TODO
    }
}
