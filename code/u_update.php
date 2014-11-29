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
	$sql="select * from user where id=$uid";
	$data=mysql_query($sql)
		or die("数据表无记录!");
	$arr=mysql_fetch_row($data);
?>

<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>修改注册信息</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<h3>您的注册信息如下：</h3>
	用户名：<? echo $arr[1];?><br>
	密码：<? echo $arr[2];?><br>
	邮箱：<? echo $arr[3];?><br>
	年龄：<? echo $arr[4];?><br>
	姓名：<? echo $arr[5];?><br>
	用户类别：<? echo $arr[6];?><br>
	注册时间：<? echo $arr[7];?><br>
	<hr>
	<form name=form4" action="u_check_update.php" method="post">
			<h1>请输入修改的信息：</h1>
			<font color="red" size="3">注意：您的用户名不能修改！</font>
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