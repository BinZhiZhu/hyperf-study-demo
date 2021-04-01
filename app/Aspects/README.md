## 切面类

### 注解

定义需要切入的类或者类方法
```
/**
 * @Aspect(
 *   classes={
 *      SomeClass::class,
 *      "App\Service\SomeClass::someMethod",
 *      "App\Service\SomeClass::*Method"
 *   },
 *   annotations={
 *      SomeAnnotation::class
 *   }
 * )
 */
 
```
