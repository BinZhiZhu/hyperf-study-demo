## 中间件

### 原理

请求A->middleware->响应

需要对请求request进行声明绑定的中间件即可，然后在中间件那里拦截request请求实现一系列操作，最后框架在处理返回response响应

### 生产代码

```bash
php ./bin/hyperf.php gen:middleware Auth/FooMiddleware
```