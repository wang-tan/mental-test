<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$id=$_POST['id'];
	$sql="select * from record where id=$id";
	$data=mysql_query($sql)
		or die("数据表无记录!");
	$arr=mysql_fetch_row($data);
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>删除测试记录</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<p><font color="#0000FF" size="5">您删除的测试记录为：</font></p>
	测试表编号：<? echo $arr[1];?><p>
	分数：<? echo $arr[3];?><p>
	测试时间：<? echo $arr[4];?><p>
	<? $sql="delete from record where id=$id";
	   $rec=mysql_query($sql) or die("删除记录失败！");
	?>
	</p>
	<p><font color="red" size="5">删除测试记录成功！</font></p>
	<br>
	<br>
	<br>
	<a href="index.php">返回主页</a>
	</div>
</body>
</html>	