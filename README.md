# PezSDK
此项目还在编写中。如果您对此项目有兴趣或者希望帮助我们，请联系2387911242#qq.com(使用@代替#)
This project is still under preparation. If you are interested in this project or want to help us, please contact 2387911242#qq.com(Replace # with @)
## 文档 Documentation
快速开始(中文)
Getting Start(English)
## 什么是PezSDK? What is PezSDK?
PezSDK 是一个基于PHP和Composer的快捷且对SDK开发者和基于SDK开发的开发者都非常友好的SDK开发框架

PezSDK is a quick and friendly SDK development framework for SDK developer and software Developer based on PHP and Composer
## PezSDK的优势在哪里? What are the advantages of PezSDK?
### 高度集成，开箱即用 Highly integrated, out of the box
PezSDK中已经集成了HTTP客户端，GET/POST参数提交等等常见模块。你要做的仅仅只是用几句代码描述你的接口。而以后我们还将推出自动化生成接口的程序。

PezSDK has integrated HTTP client, GET/POST parameter assembler and other common modules. All you have to do is describe your API interface in a few lines of code. In the future, we will have a automatic program to let developers automatically generating API interface description file.
### 功能强大，高度自定义Powerful and Customizable
得益于PezSDK的插件机制，PezSDK可以满足70%以上对API SDK的制作需求，包括鉴权，自定义头，自定义参数拼装等自定义功能。甚至你可以重写其中大部分模块（如你可以使用TCP而不是HTTP发送你的请求）。而且对于其中的大部分功能，你可以轻松地进行实现。

Thanks to the plugin mechanism of PezSDK, it can meet more than 70% of API SDK production requirements, including authentication, custom header, custom parameter assembly and other custom functions. You can even rewrite most of these modules (for example, you can send your request using TCP instead of HTTP). And for most of these functions, you can easily implement them.
### 简单易用便捷美观 Easyuse and beautiful
PezSDK使用了多种方法方便开发者进行调用。首先基于PezSDK的SDK的接入可以使用单点面向接口编程,如
```php
Github::withCredential(new TokenCredential("Your credential data"))
  ->getRepository("PezSDK/PezSDK")
  ->send()
```
或者你也可以通过继承类的方式，接入主流框架（目前计划支持ThinkPHP和Laravel一键导入）

Laravel:
```php
<?php
use,...;
class ServerManagement extends BaoTaAjaxSDKController {
    public function parse(...){/*重写方法。本函数用于解析参数，生成Request*/}
    public function beforeSend(...){/*重写方法。本函数主要用于鉴权*/}
    public function afterSend(...){/*重写方法。本函数主要用于返回数据*/}
}
```
Pezsdk uses a variety of methods to facilitate developers to call. First of all, the access of SDK based on pezsdk can use single point interface oriented programming, for example:
```php
Github::withCredential(new TokenCredential("Your credential data"))
  ->getRepository("PezSDK/PezSDK")
  ->send()
```
Or you can access the framework by extending classes (currently plans to support ThinkPHP and laravel)
For Laravel:
```php
<?php
use,...;
class ServerManagement extends BaoTaAjaxSDKController {
    public function parse(...){/*Rewritten method.Generate Requests*/}
    public function beforeSend(...){/*Rewritten method.Check authorization or permission*/}
    public function afterSend(...){/*Rewritten method.Response the value*/}
}
```
### 简单测试 Easy mock
在PezSDK中，你无需自己搭建Mock服务器，只需传入一个``MockServer``对象，即可切换到本地Mock服务器的测试

此功能需要第三方SDK配置Mock数据来启用

In PezSDK, you don't need to build your own mock server. You just need to pass in a ``MockServer`` object to switch to the local mock server test

This function requires the third-party SDK to configure mock data to enable
