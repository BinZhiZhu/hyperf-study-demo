<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 */
namespace App\Aspects;

use App\Components\CustomerService;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * Class CustomerAspect.
 * @Aspect(
 *     classes={
 *         "App\Components\CustomerService::getCustomer",
 *     }
 * )
 */
class CustomerAspect extends AbstractAspect
{
//    // 要切入的类或 Trait，可以多个，亦可通过 :: 标识到具体的某个方法，通过 * 可以模糊匹配
//    public $classes = [
//        CustomerService::class,
//        'App\Components\CustomerService::getCustomer', //尝试切入CustomerService的getCustomer方式，重写咯
    ////        'App\Components\CustomerService::*Method',
//    ];
//
//    // 要切入的注解，具体切入的还是使用了这些注解的类，仅可切入类注解和类方法注解
//    public $annotations = [
    ////        SomeAnnotation::class,
//    ];

    /**
     * @throws \Hyperf\Di\Exception\Exception
     * @return mixed return the value from process method of ProceedingJoinPoint, or the value that you handled
     */
    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        // 切面切入后，执行对应的方法会由此来负责
        // $proceedingJoinPoint 为连接点，通过该类的 process() 方法调用原方法并获得结果
        // 在调用前进行某些处理
        $result = $proceedingJoinPoint->process();
        // TODO 在调用后进行某些处理

        //切这个类的方式，拼接一下uniqid区分咯
        return $result . '_' . uniqid();
    }
}
