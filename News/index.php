<a href="add.php">�������</a><hr>
<form>
    <input type="text" name="keys">
    <input type="submit" name="subs" value="����">
</form>
<hr>
<?php
/**
 * Created by PhpStorm.
 * User: donghao
 * Date: 16/3/15
 * Time: 22:12
 */
include("conn.php");//�����������ݿ�
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
    <h2>���⣺<a href="view.php?id=<?php echo $rs['id'] ?>"><?php echo $rs['title'] ?></a>
        |  <a href="edit.php?id=<?php echo $rs['id'] ?>">�༭</a>  |  <a href="del.php?del=<?php echo $rs['id'] ?>">ɾ��</a>  |
    </h2>
    <li><?php echo $rs['dates'] ?></li>
    <p><?php echo iconv_substr($rs['contents'],0,10,'gbk') ?>...</p>
    <hr>
<?php
}
?>