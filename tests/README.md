## Codeception自动化测试模块

https://codeception.com/quickstart

## 安装

```bash
composer require "codeception/codeception" --dev
```

如果出现一下类似报错：

```bash
PHP Fatal error:  Allowed memory size of 1610612736 bytes exhausted (tried to allocate 4096 bytes) in phar:///usr/local/Cellar/composer/1.8.6/bin/composer/src/Composer/DependencyResolver/RuleWatchGraph.php on line 52
```

可以参考：https://stackoverflow.com/questions/49212475/composer-require-runs-out-of-memory-php-fatal-error-allowed-memory-size-of-161

或者直接运行,不限制内存大小:

```bash
COMPOSER_MEMORY_LIMIT=-1 composer require "codeception/codeception" --dev
```



## 命令

1.初始化框架
```bash
php vendor/bin/codecept bootstrap
```
2.创建用例

```bash
php vendor/bin/codecept generate:cest acceptance First
```

3.运行用例

```bash
php vendor/bin/codecept run --steps
```

具体参考：https://codeception.com/quickstart

