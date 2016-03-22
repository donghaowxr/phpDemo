<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 2016-03-17
 * Time: 15:07
 */
$mysqli=@new mysqli("127.0.0.1","root","123456","phptest");
if(mysqli_connect_errno()){
    echo "连接数据库失败:".mysqli_connect_error();
    $mysqli=null;
    exit;
}
$mysqli->set_charset("utf-8");
?>