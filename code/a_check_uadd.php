<?
	//启动会话变量，成功注册后切换到index_menu.php
	session_start();
?>
<?
	$i=0;
	//检测用户名
	if(empty($_POST["username"]))
		$err[$i++]="请输入用户名！";
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
	//连接服务器，数据库
	include 'function.php';
	link_server();
	$cmd="select * from user where username="."'".$_POST["username"]."'";
	$data=mysql_query($cmd) or die("<br>数据表无记录。</br>");
	$rec_count=mysql_num_rows($data);//在册人数
	if($rec_count>0){
		die('<br>'.$_POST["id"].'该用户名已经注册<a href="a_user_add.php">返回</a>');
	}
	//增加记录
	$sql="insert into user(username,pwd,age,email,name,type,date) values('".$_POST['username']."','";
	$sql.=$_POST["pwd"]."',".$_POST["age"].",'".$_POST["email"]."','".$_POST["name"]."',".$_POST["type"].",'";
	$sql.=date("Y-m-d H:i:s")."');";
	$data=mysql_query($sql) or die("<br>增加数据表记录失败。<br>");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>添加用户</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<p><font color="red" size="5">添加用户成功！</font></p><br><br>
	<p>添加的用户信息如下：</p>
	<p>用户名：<? echo $_POST["username"];?>
	<p>密码：<? echo $_POST["pwd"];?>
	<p>年龄：<? echo $_POST["age"];?>
	<p>邮箱：<? echo $_POST["email"];?>
	<p>姓名：<? echo $_POST["name"];?>
	<p>用户类别：<? echo $_POST["type"];?>
	<p>注册时间：<? echo date("Y- m- d H:i:s");?>
	</div>
</body>
</html>

