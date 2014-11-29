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
		<title>删除测试记录</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<form name="form5" method="post" action="u_check_delete.php">
		<table width="500" border="0">
		<p>***<font color="#0000FF" size="6">请选择您要删除的测试记录</font>***</p>
		
		<?php while($arr=mysql_fetch_row($data)){?>
				<input name="id" type="radio" value="<?php echo $arr[0]; ?>" checked>
		        测试表编号：<? echo $arr[1];?>&nbsp;&nbsp;&nbsp;&nbsp;分数：<? echo $arr[3];?>&nbsp;&nbsp;&nbsp;&nbsp;测试时间：<? echo $arr[4];?>
				<p>
		<?php } ?>
		<br>
		<tr>
			<td>
			<div align="center">
                <input name="submit" type="submit" value="确认删除">
			</div>
			</td>
		</tr>
		</table>
		<br>
	</form>
	</div>
</body>
</html>
	