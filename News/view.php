<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/16
 * Time: 21:48
 */
include("conn.php");
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from news where id='$id'";
    $query= mysql_query($sql);
    $rs=mysql_fetch_array($query);
    $sql="update news set hits=hits+1 where id='$id'";
    mysql_query($sql);
}
?>
<h1><?php echo $rs['title'] ?></h1>
<h2><?php echo $rs['dates'] ?></h2>
<h3>µã»÷Á¿:<?php echo $rs['hits'] ?></h3>
<hr>
<p>
    <?php echo $rs['contents'] ?>
</p>