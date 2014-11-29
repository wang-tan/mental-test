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
		<title>添加用户测试记录</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<form name="form11" method="post" action="a_check_radd.php">
		<p>***<font color="#0000FF" size="6">请输入您要添加的用户测试记录</font>***</p>
		<p>测试表编号：<input name="sid" type="text" size="20"></p>
		<p>用户编号：<input name="uid" type="text" size="20"></p>
		<p>测试得分：<input name="score" type="text" size="20"></p>
		<p>测试时间：<input name="date" type="text" size="20"></p>
		<p>
	  <div align="center">
                <input name="submit" type="submit" value="确认添加">
				<input name="reset" type="reset" value="重新填写">
	  </div>
	</form>
	</div>
</body>
</html>