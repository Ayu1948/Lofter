<?php
    return array(
        "db_config" => array(
            "db"=>"mysql",//采用的数据库
            "host"=>"localhost",//服务器地址
            "dbname"=>"weibo",//数据库名
            "charset"=>"utf8",//字符集
            "user"=>"root",//用户名
            "password"=>""//密码
        ),
        "smarty_config" => array(
            "template_dir"=>"views",//模版目录
            "compile_dir"=>"views_c",//编译目录
            "cache"=>"cache",//缓存目录
            "cache_lifetime"=>"0",//缓存时间
            "caching"=>true//缓存方式
        )
    );
?>