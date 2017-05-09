PHPDa——简单的后端框架
    PHPDa全称PHP Data API，是笔者开发的一个轻量级的后端框架，该框架使用完全面向对象的方式编程，具备良好的可扩展性。框架结构参见下图，其中Library是框架的核心，包括数据库访问服务、数据缓存服务、环境变量服务、配置文件驱动服务、日志记录服务，Dao是数据接口层，Service是事务处理层，Action是请求入口层，Controller是路由层，Conf是配置目录，所有的配置文件均放在该目录下，Log是日志文件目录，所有的日志都放在该目录下，Index.php是用户服务的入口。
框架结构
├─Index.php
├─Log
├─Conf
├─Controller
├─Action
├─Service
├─Dao
└─Library
