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
		die('<br>'.$_POST["id"].'该用户名已经注册<a href="register.html">返回</a>');
	}
	//增加记录
	$sql="insert into user(username,pwd,age,email,name,type,date) values('".$_POST['username']."','";
	$sql.=$_POST["pwd"]."',".$_POST["age"].",'".$_POST["email"]."','".$_POST["name"]."',".$_POST["type"].",'";
	$sql.=date("Y-m-d H:i:s")."');";
	$data=mysql_query($sql) or die("<br>增加数据表记录失败。<br>");
	//显示接收到的数据
	print "<br>用户名：".$_POST["username"];
	print "<br>密码：".$_POST["pwd"];
	print "<br>年龄：".$_POST["age"];
	print "<br>邮箱：".$_POST["email"];
	print "<br>姓名：".$_POST["name"];
	print "<br>用户类别：".$_POST["type"];
	print "<br>注册时间：".date("Y- m- d H:i:s");
	//设置回话变量换到index_menu.php
	$_SESSION["username"]=$_POST['username'];
	$_SESSION["pwd"]=$_POST['pwd'];
	print '<br><br>成功注册. ';
	print '<meta http-equiv="refresh" content="7;URL=index_menu.php"/>';	
?>