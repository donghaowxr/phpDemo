<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/15
 * Time: 21:32
 */
    @mysql_connect('localhost','donghao','123456')or die("mysql连接失败");
    @mysql_select_db("phptest")or die("db连接失败");
    mysql_set_charset("gbk");
?>