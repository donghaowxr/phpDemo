<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/16
 * Time: 21:08
 */
include("conn.php");//�����������ݿ�
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="select * from news WHERE `id`='$id'";
    $query=mysql_query($sql);
    $rs=mysql_fetch_array($query);
}
if(!empty($_POST['sub'])){
    $id=$_POST['hid'];
    $title=$_POST['title'];
    $con=$_POST['con'];
    $sql="update news set title='$title',contents='$con',dates=now() where id='$id'";
    mysql_query($sql);
    echo "<script>alert('���³ɹ�');location.href='index.php'</script>";
}
?>

<form action="edit.php" method="post">
    <input type="hidden" name="hid" value="<?php echo $rs['id'] ?>">
    ����<input type="text" name="title" value="<?php echo $rs['title'] ?>"><br>
    ����<textarea rows="5" cols="50" name="con"><?php echo $rs['contents'] ?></textarea><br>
    <input type="submit" name="sub" value="����">
</form>