<?
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
?>
<?php
	//连接数据库和数据表
	include "function.php";
	link_server();
	//识别登录人员的身份，管理员/普通用户
	
	$cmd="select * from user where username='".$_SESSION['username']."' and pwd='".$_SESSION['pwd']."'";
	$data=mysql_query($cmd) or
		die($_SESSION['username']."user数据表提取错误！登录失败。<a href='index.php'>返回主页</a>"); 
	$rec=mysql_fetch_array($data);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>欢迎访问爱健康心理测试网站</title>
		<style type="text/css">
		body,td,th {
			color: #000000;
		}
		body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
	background-color: #FFFFFF;
		}
		</style>
	</head>
		 &nbsp;
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
	<body>
	<?
	//网页页面顶部
	$pag_top_note='您好：'.$_SESSION["username"]."".$rec["name"];
	pag_top($pag_top_caption,$pag_top_note);
	?>
	<?
	//根据$rec['type']显示普通用户或管理员菜单导航
	pag_menu($rec['type']);
	?>
	<div align="center"> 
		 <textarea name="textarea" cols="85" rows="5">
			欢迎访问爱健康心理测试网站，本站提供以下操作职能：
				1.选择导航菜单，完成操作。
				2.普通用户和管理员用户的导航菜单提示不同。
		</textarea>
	<?
	//网页页面底部$pag_bottom_caption,$web_email在function.php设置
	pag_bottom($pag_bottom_caption,$web_email);
	?>
	<p>
	<a href="introduce.php">网站介绍</a>
	<a href="about.php">关于我们</a>
	</div>
	</body>
</html>		
