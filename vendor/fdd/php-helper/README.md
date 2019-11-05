# [php-helper](https://github.com/fudanda/phpHelper)

===============

[![PHP Version](https://img.shields.io/badge/php-%3E%3D7.1-8892BF.svg)](http://www.php.net/)
[![License](https://poser.pugx.org/topthink/framework/license)](https://packagist.org/packages/topthink/framework)

适用于 [ThinkPHP5.1](http://thinkphp.cn) 快速生成 html/vue 打开即用的后台管理页面

## 主要新特性

* 创建权限数据库
* 创建静态文件
* laravel-mix 打包vue项目

> php-helper 的运行环境要求PHP7.1+。

## 安装

~~~bash
composer require fdd/php-helper  (名称暂定)
~~~

## 使用

创建html项目 （[文档](./doc/README-Html.md)）

~~~bash
php think  admin:init
~~~

创建Vue项目

~~~bash
php think  vue:init
~~~

vue项目初始化

~~~bash
1.安装
npm install --no-bin-links
2.更新包
npm install -g npm-check-updates
3.编译 监视项目的变化
npm run watch
~~~

更新

~~~bash
composer update fdd/php-helper
~~~

创建 model,contrell 等等(admin 为多应用名称,Article为控制器名，首字母需大写)

~~~bash
php think  curd:admin/Article
~~~

![kuiba](https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=4168864317,3199957741&fm=58&bpow=1121&bpoh=1600)

## PHP 助手类 封装常用方法

对一些项目中常用的方法进行封装,减少 copy 代码的时间：：

* 奇衡三 基斯卡人 （[导出](./doc/README-Excel.md)）
* 幽弥狂 雾妖
* 燃谷 兽族
* 幽若离 格勒莫赫人
* 大仓 萨库人
* 吧咕哒 蛰族
* 卡拉肖克玲 龙族
* 雷光 翼族
* 梅龙尼卡嘉 龙族
* 海问香 粼妖
* 万两 墨拓人
* 秋落木 辉妖

[![tobecontinued](./tobecontinued.jpg)](https://github.com/fudanda/myadmin)
