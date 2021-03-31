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


