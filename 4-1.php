<?php
/**
 * 第四章 数据库操作
 *      Laravel中提供DB facade(原始查找)、查询构造器和Eloquent ORM三种操作数据库方式
 *
 *      数据库操作之一 DB facade
 *          新建数据表与连接数据库
 *          使用DB facade实现CURD
 *
 * 4-1 新建数据表与连接数据库
 *      新建数据表
 *          学生表
 *          CREATE TABLE IF NOT EXISTS student(
                `id` INT AUTO_INCREMENT PRIMARY KEY,
                `name` VARCHAR(255) NOT NULL default '' comment '姓名',
                `age` TINYINT UNSIGNED NOT NULL DEFAULT 0 COMMENT '年龄',
                `sex` TINYINT UNSIGNED NOT NULL DEFAULT 10 COMMENT '性别',
                `created_at` INT NOT NULL DEFAULT 0 COMMENT '新增时间',
                `updated_at` INT NOT NULL DEFAULT 0 COMMENT '修改时间'
            )ENGINE=InnoDB DEFAULT CHARSET = UTF8 AUTO_INCREMENT=1001 COMMENT='学生表';
 *
 * 4-2 使用DB facade实现CURD
 *
 *
 *
 *
 *
 */