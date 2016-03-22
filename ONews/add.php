<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 2016-03-17
 * Time: 15:08
 */
include("conn.php");
if(!empty($_POST['sub'])){
    $title=$_POST['title'];
    $conn=$_POST['conn'];
    $sql="insert into news (title,dates,contents) values(?,now(),?)";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('ss',$title,$conn);//ss指两个参数都是字符串型，i为整型，d为double,s为string,b为blob布尔值
    if(!$stmt->execute()){
        $stmt->close();
        $mysqli->close();
        echo "<script>alert('添加失败');</script>";
    }else{
        $stmt->close();
        $mysqli->close();
        echo "<script>alert('添加成功');location.href='index.php'</script>";
    }
}
?>
<form action="add.php" method="post" accept-charset="utf-8">
    标题:<input type="text" name="title"><br><br>
    内容:<textarea name="conn" rows="10" cols="100"></textarea><br><br>
    <input type="submit" name="sub" value="提交">
</form>
