<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/15
 * Time: 21:50
 */
    include("conn.php");//�����������ݿ�
    if(!empty($_POST['sub'])){
        $title=$_POST['title'];
        $con=$_POST['con'];
        $sql="insert into `news`(`id`,`title`,`dates`,`contents`) values (null,'$title',now(),'$con')";
        mysql_query($sql);
        echo "����ɹ�";
    }
?>
<form action="add.php" method="post">
    ����<input type="text" name="title"><br>
    ����<textarea rows="5" cols="50" name="con"></textarea><br>
    <input type="submit" name="sub" value="����">
</form>