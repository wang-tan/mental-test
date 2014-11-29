<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$id=$_POST['id'];
	$sql="select * from user where id=$id";
	$data=mysql_query($sql)
		or die("数据表无记录!");
	$arr=mysql_fetch_row($data);
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>删除用户</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<p><font color="#0000FF" size="5">您删除的用户信息为：</font></p>
	用户编号：<? echo $arr[0];?><p>
	用户名：<? echo $arr[1];?><p>
	邮箱：<? echo $arr[3];?><p>
	年龄：<? echo $arr[4];?><p>
	姓名：<? echo $arr[5];?><p>
	用户类别：<? echo $arr[6];?><p>
	注册时间：<? echo $arr[7];?><p>
	<? $sql="delete from record where id=$id";
	   $rec=mysql_query($sql) or die("删除记录失败！");
	?>
	</p>
	<p><font color="red" size="5">删除用户成功！</font></p>
	<br>
	<br>
	<br>
	<a href="index.php">返回主页</a>
	</div>
</body>
</html>	