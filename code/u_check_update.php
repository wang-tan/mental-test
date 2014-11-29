<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$username=$_SESSION['username'];
?>
<?
	$i=0;
	//检测密码
	if(! ereg("^([a-zA-Z0-9_-]{6})",$_POST["pwd"]))
		$err[$i++]="密码错误！密码必须6位字母或数字！";
	if(strcmp($_POST["pwd"],$_POST["pwd2"])!=0)
		$err[$i++]="操作错误两次密码不一致！";
	//检测年龄
	if(! ereg("^([1-200])",$_POST["age"]))
		$err[$i++]="年龄必须是1-200的数字！";
	//检测邮箱名称
	if(!ereg("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+",$_POST["email"]))
		$err[$i++]="邮箱格式错误！";
	//检测姓名
	if(strlen(trim($_POST["name"]))<4 or ! is_string($_POST["name"]))
		$err[$i++]="姓名输入错误！姓名必须是2个以上汉子。";
	//检测用户类别
	if(empty($_POST["type"]))
		$err[$i++]="请选择用户类别！";
	//打印错误提示
	for($j=0;$j<$i;$j++)
		print "<br> $err[$j]";
	if($i!=0){
		//结束程序
		die('<br> <a href="register.html">返回</a>');
	}
	//修改记录
	$sql="update user set pwd='".$_POST["pwd"]."',age=".$_POST["age"].",email='".$_POST["email"]."',name='".$_POST["name"]."',type=".$_POST["type"].",date='".date("Y-m-d H:i:s")."' where username='".$username."';";
	$data=mysql_query($sql) or die("<br>修改数据表记录失败。<br>");
	//显示接收到的数据
	print "<br>用户名：".$username;
	print "<br>密码：".$_POST["pwd"];
	print "<br>年龄：".$_POST["age"];
	print "<br>邮箱：".$_POST["email"];
	print "<br>姓名：".$_POST["name"];
	print "<br>用户类别：".$_POST["type"];
	print "<br>注册时间：".date("Y- m- d H:i:s");
	print '<br><br>修改信息成功！';	
?>