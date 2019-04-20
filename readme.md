<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 零里君的博客

### 初始化工作

#### 安装扩展包依赖

```$xslt
composer install
```

#### 修改配置文件

```$xslt
cp .env.example .env
```

配置文件说明

```$xslt
...

DB_CONNECTION=mysql             //数据库的连接类型
DB_HOST=127.0.0.1               //数据库的连接地址
DB_PORT=3306                    //数据库的连接端口
DB_DATABASE=homestead           //数据库的库名
DB_USERNAME=homestead           //数据库的用户名
DB_PASSWORD=secret              //数据库的密码

...

MAIL_DRIVER=smtp                //邮箱通讯协议
MAIL_HOST=smtp.mailtrap.io      //邮箱服务器
MAIL_PORT=2525                  //连接服务的端口
MAIL_USERNAME=null              //连接服务器所用邮箱
MAIL_PASSWORD=null              //你邮箱的授权码
MAIL_FROM_ADDRESS=YOUR_EMAIL    //发邮件的邮箱
MAIL_FROM_NAME=YOUR_NAME        //邮件发件人
MAIL_ENCRYPTION=SSL             //加密技术

...
```

#### 生成随机字串作为应用的秘钥

```$xslt
php artisan key:generate
```

#### 创建文件资源软链接

```$xslt
php artisan storage:link
```


#### 执行数据库迁移

```$xslt
php artisan migrate
```

#### 填充初始数据

```$xslt
php artisan db:seed
```

#### 安装node.js

直接去官网 https://nodejs.org/en/ 下载安装最新版本。

#### 安装 Laravel Mix

```$xslt
npm install
```

如果嫌弃国内npm下载慢的话，可以使用淘宝NPM镜像：http://npm.taobao.org/

#### 直接 Mix 编译前端内容

开发环境使用：

```$xslt
npm run dev
```

生产环境请使用:

```$xslt
npm run production
```

监控修改并自动编译:

```$xslt
npm run watch
```

前后台入口

> 如果要开启调试模式，请修改 `.env` 文件， `APP_ENV=local` 和 `APP_DEBUG=true` 

- 首页地址：http://example.com/
- 管理后台：http://example.com/admin

默认用户名：`644516361@qq.com` 密码：`secret`
