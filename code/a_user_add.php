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
		<title>添加用户</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<form name="form12" method="post" action="a_check_uadd.php">
		<p>***<font color="#0000FF" size="6">请输入您要添加的用户信息</font>***</p>
		<hr>
			<p align="center">用户名
				<input name="username" type="text" size="20" maxlength="10"></p>
			<p align="center">密码
				<input name="pwd" type="password" size="20" maxlength="6"></p>
			<p>确认密码
				<input name="pwd2" type="password" size="20" maxlength="6"></p>
			<p>年龄
	    <input name="age" type="text" size="20" maxlength="6"></p>
			<p>邮箱
				<input name="email" type="text" size="20" maxlength="20"></p>
			<p>姓名
				<input name="name" type="text" size="20" maxlength="10"></p>
			<p>用户类别
				<input name="type" type="radio" value="1" checked>普通用户
				<input name="type" type="radio" value="2" checked>系统管理员</p>
			<p><input name="submit" type="submit" value="提交">
			   <input name="reset" type="reset" value="重新填写">
		    </p>
	</form>
	</div>
</body>
</html>