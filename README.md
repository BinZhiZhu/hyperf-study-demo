hyperf实践，[wiki]https://hyperf.wiki/2.1/#/zh-cn/quick-start/overview


## 部署问题

1.安装swoole扩展
```
sudo pecl install swoole
```
2.php.ini禁用swoole.use_shortname=off
```
swoole.use_shortname=off
```
3.重启一下php-fpm
```
brew services restart php@7.4
```
4.运行服务：http://localhost:9501/
```
php bin/hyperf.php start
```

## 毒鸡汤


重写了一次hyperf版本的毒鸡汤,访问下面的url即可

```bash
http://localhost:9501/view/index
```

注意：需要提前跑migration，导入SQL文件

## TODO 

1.Inject深度使用
2.AOP实践，可看视频：https://course.swoole-cloud.com/videos/5/new?from=hyperf.io
3.websocket实践

## TODO CHECK

1.依赖注入问题，不能直接注入interface，只能inject类，参考app/Controller/IndexController.php:28
2.多端口监听路由注解不能共享，只能指定某个server，例如：@AutoController(server="innerHttp")

## 注意事项

1.由于项目是在swoole环境中运行的，是CLI持久化的，跟传统的fpm不同，如果代码补充了逻辑，需要restart下服务，重启。
