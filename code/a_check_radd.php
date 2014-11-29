<?
	//启动会话变量，成功注册后切换到index_menu.php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$sid=$_POST['sid'];
	$uid=$_POST['uid'];
	$score=$_POST['score'];
	$date=$_POST['date'];
	$sql="insert into record(sid,uid,score,date) values('".$sid."','".$uid."','".$score."','".$date."')";
	$data=mysql_query($sql) or die("插入数据失败！");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>添加用户测试记录</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<p><font color="red" size="3">添加用户测试记录成功！</font></p><br><br>
	<p>添加的用户测试记录如下：</p>
	<p>测试表编号：<? echo $sid;?>
	<p>用户编号：<? echo $uid;?>
	<p>用户得分：<? echo $score;?>
	<p>测试时间：<? echo $date;?>
	</div>
</body>
</html>