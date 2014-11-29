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
	$sql="select * from record where uid=$uid";
	$data=mysql_query($sql)
		or die("数据表无记录!");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>浏览测试记录</title>
    <style type="text/css">
<!--
body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
}
-->
</style></head>
	<body>
	<div align="center"><p>
	<h2><? echo $username;?>&nbsp;您的测试记录如下：</h2>
	<table border="1" bordercolor="#00FF00" bgcolor="#FFFFFF">
	<tr>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>测试表编号</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>分数</p>
		</th>
		<th width="200" bgcolor="#FFFF00" scope="col"><p>测试时间</p>
		</th>			
    </tr>
	<? while($arr=mysql_fetch_row($data)){ ?>
	  <tr>
		<td><? echo $arr[1];?></td>
	  
		<td><? echo $arr[3];?></td>
	 
		<td><? echo $arr[4];?></td>
	  </tr>
	<? } ?> 
	</table>
	</div>
	</body>
</html>