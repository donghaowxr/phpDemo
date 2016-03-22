<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 2016-03-22
 * Time: 10:47
 */
include("conn.php");
if(!empty($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from news where id=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('i',$id);
    if($stmt->execute()){
        sqlClose($stmt,$mysqli);
        echo "<script>alert('删除成功');location.href='index.php'</script>";
    }else{
        sqlClose($stmt,$mysqli);
        echo "<script>alert('删除失败');location.href='index.php'</script>";
    }
}
function sqlClose($stmt,$mysqli){
    $stmt->close();
    $mysqli->close();
}
?>