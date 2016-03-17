<a href="add.php">添加内容</a><hr>
<form>
    <input type="text" name="keys">
    <input type="submit" name="subs" value="搜索">
</form>
<hr>
<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/15
 * Time: 22:12
 */
include("conn.php");//引入连接数据库
if(!empty($_GET['keys'])){
    $keys=$_GET['keys'];
    $w="`title` like '%$keys%'";
}else{
    $w=1;
}
$sql="select * from `news` WHERE $w ORDER  BY id DESC limit 10";
$query=mysql_query($sql);
while($rs=mysql_fetch_array($query)) {
    ?>
    <h2>标题：<a href="view.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?></a>
        |  <a href="edit.php?id=<?php echo $rs['id'] ?>">编辑</a>  |  <a href="del.php?del=<?php echo $rs['id'] ?>">删除</a>  |
    </h2>
    <li><?php echo $rs['dates'] ?></li>
    <p><?php echo iconv_substr($rs['contents'],0,10,'gbk') ?>...</p>
    <hr>
<?php
}
?>