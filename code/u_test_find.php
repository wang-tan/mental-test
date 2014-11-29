<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$username=$_SESSION['username'];
	$sql="select id from user where username='$username'";
	$data=mysql_query($sql) or die("数据表无记录！");
	$arr=mysql_fetch_row($data);
	$uid=$arr[0];
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>查询测试记录</title>
    <style type="text/css">
<!--
body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
}
-->
</style></head>
	<body>
	<div align="center"><p>
	<h2>查询测试记录：</h2>
	<form name="form6" method="post" action="u_check_find.php">
		<p>输入查询条件：</p>
		<hr>
		<p>用户名：
		<input name="username" type="text" size="20">
		<p>测试表编号：
		<input name="sid" type="text" size="20">
		<div align="center">
		<p><input name="submit" type="submit" value="查询">
		<hr>
		</div>
		<br>
	</form>
	</div>
	</body>
</html>