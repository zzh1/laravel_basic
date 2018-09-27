<?php
/**
 * 第六章 数据库操作之 - Eloquent ORM
 *      Eloquent ORM 简介、模型的建立及查询数据
 *      Eloquent ORM 中新增数据、自定义时间戳及批量赋值的使用
 *      使用Eloquent ORM 修改数据
 *      使用Eloquent ORM 删除数据
 *
 * 6-1 Eloquent ORM简介、模型的建立及查询数据
 *      Eloquent ORM 简介
 *      模型的建立
 *      Eloquent ORM中的查询
 *          all()、find()、findOrFail()
 *          查询构造器在ORM中的使用
 *
 *      Eloquent ORM 简介
 *          Laravel所自带的Eloquent ORM是一个优美、简洁的ActiveRecord实现，用来实现数据库操作
 *          每个数据表都有一个与之相对应的"模型(Model)" 用于和数据表交互
 *
 *      模型的建立
 *
 * 6-2 ORM中的新增、自定义时间戳及批量赋值
 *      通过模型新增数据(涉及到自定义时间戳)
 *      使用模型的Create方法新增数据(涉及到批量赋值)
 *
 * 6-3 使用Eloquent ORM 修改数据
 *      通过模型更新
 *      结合查血语句 批量更新
 *
 * 6-4 使用Eloquent ORM删除数据
 *      通过模型删除
 *      通过主键值删除
 *      根据指定条件删除
 *
 *
 *
 *
 */