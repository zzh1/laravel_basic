<?php
/**
 * 第八章 Controller
 *      Controller之Request
 *      Controller之Session
 *      Controller之Response
 *      Controller之Middleware
 *
 * 8-1 Controller之Request
 *      Laravel中的请求使用的是symfony/http-foundation组件
 *      请求里面存放了$_GET,$_POST,$_COOKIE,$_FILES,$_SERVER等数据
 *
 *      获取请求中的值
 *      判断请求类型
 *
 * 8-2 Controller之Session
 *      Session简介
 *          由于HTTP协定是无状态(stateless)的，所以session提供一种保存用户数据的方法
 *
 *          Laravel支持了多种session后端驱动，并提供清楚、统一的API。也内置支持如
 *          Memcached、Redis和数据库的后端驱动。默认使用"file"的Session驱动
 *
 *          session的配置文件配置在config/session.php中
 *
 *      laravel中使用session有三种方法
 *          HTTP request类的session()方法
 *          session() 辅助函数
 *          Session facade
 *
 *
 *
 *
 *
 */



