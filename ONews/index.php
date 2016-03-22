<a href="add.php">添加新闻</a>
<form>
    <input type="text" name="keys">
    <input type="submit" name="subs" value="搜索">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 2016-03-21
 * Time: 16:22
 */
include("conn.php");
if(!empty($_GET['keys'])){
    $keys=$_GET['keys'];
    $w="title like '%$keys%'";
}else{
    $w=1;
}
$sql="select * from news where $w ORDER by id DESC limit 10";
$result=$mysqli->query($sql);
while($row=$result->fetch_array(MYSQLI_BOTH)){
?>
<h2>标题:<?php echo $row['title'] ?>
    <a href="edit.php?id=<?php echo $row['id'] ?>">编辑</a>  <a href="del.php?id=<?php echo $row['id'] ?>">删除</a>
</h2>
<li>日期:<?php echo $row['dates'] ?></li>
<p><?php echo $row['contents'] ?></p>
<?php } ?>