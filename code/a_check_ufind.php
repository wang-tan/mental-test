<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$uid=$_POST['uid'];
	$type=$_POST['type'];
	$sql="select * from user where id=$uid and type=$type";
	$data=mysql_query($sql)
		or die("数据表无记录!");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>查询用户</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<p><font color="#0000FF" size="5">符合您查询条件的用户为：</font></p>
	<table border="1" bordercolor="#00FF00" bgcolor="#FFFFFF">
	<tr>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>用户编号</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>用户名</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col">邮箱<p></p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>年龄</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>姓名</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>用户类别</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>注册时间</p>
		</th>	
    </tr>
	<? while($arr=mysql_fetch_row($data)){ ?>
	  <tr>
		<td><? echo $arr[0];?></td>
		<td><? echo $arr[1];?></td>
		<td><? echo $arr[3];?></td>
		<td><? echo $arr[4];?></td>
		<td><? echo $arr[5];?></td>
		<td><? echo $arr[6];?></td>
		<td><? echo $arr[7];?></td>
	  </tr>
	<? } ?> 
	</table>
	<br>
	<br>
	<br>
	<a href="index.php">返回主页</a>
	</div>
</body>
</html>	