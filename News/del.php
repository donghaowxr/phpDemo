<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/15
 * Time: 22:34
 */
include("conn.php");
if(!empty($_GET['del'])){
    $d=$_GET['del'];
    $sql="delete from `news` WHERE `id`='$d'";
    mysql_query($sql);
    echo "É¾³ý³É¹¦";
}
?>