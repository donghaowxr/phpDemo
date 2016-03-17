<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/15
 * Time: 21:50
 */
    include("conn.php");//引入连接数据库
    if(!empty($_POST['sub'])){
        $title=$_POST['title'];
        $con=$_POST['con'];
        $sql="insert into `news`(`id`,`title`,`dates`,`contents`) values (null,'$title',now(),'$con')";
        mysql_query($sql);
        echo "插入成功";
    }
?>
<form action="add.php" method="post">
    标题<input type="text" name="title"><br>
    内容<textarea rows="5" cols="50" name="con"></textarea><br>
    <input type="submit" name="sub" value="发表〃">
</form>