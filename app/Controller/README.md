## 控制器层


## 注解

### 通过 @AutoController 注解定义路由
@AutoController 为绝大多数简单的访问场景提供路由绑定支持，使用 @AutoController 时则 Hyperf 会自动解析所在类的所有 public 方法并提供 GET 和 POST 两种请求方式。

使用 @AutoController 注解时需 use Hyperf\HttpServer\Annotation\AutoController; 命名空间；

驼峰命名的控制器，会自动转化为蛇形路由，以下为控制器与实际路由的对应关系示例：

控制器	注解	访问路由
MyDataController	@AutoController()	/my_data/index
MydataController	@AutoController()	/mydata/index
MyDataController	@AutoController(prefix="/data")

### 通过 @Controller 注解定义路由
@Controller 为满足更细致的路由定义需求而存在，使用 @Controller 注解用于表明当前类为一个 Controller 类，同时需配合 @RequestMapping 注解来对请求方法和请求路径进行更详细的定义。
我们也提供了多种快速便捷的 Mapping 注解，如 @GetMapping、@PostMapping、@PutMapping、@PatchMapping、@DeleteMapping 5 种便捷的注解用于表明允许不同的请求方法。

使用 @Controller 注解时需 use Hyperf\HttpServer\Annotation\Controller; 命名空间；
使用 @RequestMapping 注解时需 use Hyperf\HttpServer\Annotation\RequestMapping; 命名空间；
使用 @GetMapping 注解时需 use Hyperf\HttpServer\Annotation\GetMapping; 命名空间；
使用 @PostMapping 注解时需 use Hyperf\HttpServer\Annotation\PostMapping; 命名空间；
使用 @PutMapping 注解时需 use Hyperf\HttpServer\Annotation\PutMapping; 命名空间；
使用 @PatchMapping 注解时需 use Hyperf\HttpServer\Annotation\PatchMapping; 命名空间；
使用 @DeleteMapping 注解时需 use Hyperf\HttpServer\Annotation\DeleteMapping; 命名空间；

### 生成控制器

```bash
php ./bin/hyperf.php gen:controller
```


### 注解请求

```bash
@GetMapping(path="index/{id:\d+}/{token:\d+}")
```

请求 /index/1/123456 那么在方法的参数中可以直接拿到参数:id = 1、token = 123456