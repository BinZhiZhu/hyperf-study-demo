## 定义事件监听器

### 通过注解注册监听器
Hyperf 还提供了一种更加简便的监听器注册方式，就是通过 @Listener 注解注册，只要将该注解定义在监听器类上，且监听器类处于 Hyperf 注解扫描域 内即可自动完成注册，代码示例如下：

```php
<?php
namespace App\Listener;

use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * @Listener 
 */
class UserRegisteredListener implements ListenerInterface
{
    public function listen(): array
    {
        // 返回一个该监听器要监听的事件数组，可以同时监听多个事件
        return [
           
        ];
    }

    /**
     */
    public function process(object $event)
    {
        // 事件触发后该监听器要执行的代码写在这里，比如该示例下的发送用户注册成功短信等
        // 直接访问 $event 的 user 属性获得事件触发时传递的参数值
        // $event->user;
    }
}

```

在通过注解注册监听器时，我们可以通过设置 priority 属性定义当前监听器的顺序，如 @Listener(priority=1) ，底层使用 SplPriorityQueue 结构储存，priority 数字越大优先级越高。