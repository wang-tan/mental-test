<?php
	session_start();
	//index.php输入的用户名保存在$_POST['username'],用户密码保存在$_POST['pwd']
	//只要用户名和密码有一项没有输入就会显示错误终止程序
	if(empty($_POST['username']) or empty($_POST['pwd']))
		die("用户名和密码不能空缺。<br>
			<a href='index.php'>返回</a>");
	//连接服务器，数据库
	include 'function.php';
	link_server();
	//检测登录人员是否已经注册
	
	$sql="select * from user where username='".$_POST['username']."' and pwd='".$_POST['pwd']."'";
	
	
	$data=mysql_query($sql) or
		die($_POST['username']."user数据表提取错误！登录失败。<a href='index.php'>返回主页</a>");
	$rec_count=mysql_num_rows($data);//得到记录个数
	if($rec_count!=1)//得到记录个数小于1表示输入的用户信息不存在
		die($_POST['username']."该用户名或登录密码错误！登录失败。<a href='index.php'>返回主页</a>");
	$rec=mysql_fetch_array($data) or die("user数据表记录错误！<a href='index.php'>返回主页</a>");
	//已经注册的用户，可以登录网站
	$_SESSION["username"]=$_POST['username'];
	$_SESSION["pwd"]=$_POST['pwd'];
	//跳转到菜单网页
	print'<meta http-equiv="refresh" content="2;URL=index_menu.php"/>';
?>