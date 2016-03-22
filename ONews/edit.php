<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 2016-03-21
 * Time: 16:53
 */
include("conn.php");
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="select id,title,contents from news where id=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();
    $stmt->bind_result($id,$title,$conn);
    $stmt->fetch();
    $stmt->close();
    $mysqli->close();
}
if(!empty($_POST['sub'])){
    $hid=$_POST['hid'];
    $title=$_POST['title'];
    $conn=$_POST['conn'];
    $sql="update news set title=?,dates=now(),contents=? where id=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('ssi',$title,$conn,$hid);
    if($stmt->execute()){
        sqlClose($stmt,$mysqli);
        echo "<script>alert('修改成功');location.href='index.php'</script>";
    }else{
        sqlClose($stmt,$mysqli);
        echo "<script>alert('修改失败');location.href='index.php'</script>";
    }
}

function sqlClose($stmt,$mysqli){
    $stmt->close();
    $mysqli->close();
}
?>
<form action="edit.php" method="post">
    <input type="hidden" name="hid" value="<?php echo $id ?>">
    标题:<input type="text" name="title" value="<?php echo $title ?>"><br><br>
    内容:<textarea name="conn" rows="10" cols="100"><?php echo $conn ?></textarea><br><br>
    <input type="submit" name="sub" value="提交">
</form>
