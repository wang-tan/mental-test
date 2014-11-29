<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>查询用户</title>
    <style type="text/css">
<!--
body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
}
-->
</style></head>
	<body>
	<div align="center"><p>
	<h2>查询用户：</h2>
	<form name="form8" method="post" action="a_check_ufind.php">
		<p>输入查询条件：</p>
		<hr>
		<p>用户编号：
		<input name="uid" type="text" size="20">
		<p>用户类别：
		<input name="type" type="radio" value="1" checked>普通用户
		<input name="type" type="radio" value="2" checked>系统管理员</p>
		<div align="center">
		<p><input name="submit" type="submit" value="查询">
		<hr>
		</div>
		<br>
	</form>
	</div>
	</body>
</html>