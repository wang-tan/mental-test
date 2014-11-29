<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$sql="select * from user";
	$data=mysql_query($sql) or die("数据表无记录！");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>删除用户</title>
    </head>
	<body background="images/向日葵.jpg">
	<div align="center"><p>
	<form name="form9" method="post" action="a_check_udelete.php">
		<table width="500" border="0">
		<p>***<font color="#0000FF" size="6">请选择您要删除的用户</font>***</p>
		<?php while($arr=mysql_fetch_row($data)){?>
				<input name="id" type="radio" value="<?php echo $arr[0]; ?>" checked>
		        用户编号：<? echo $arr[0];?>&nbsp;&nbsp;用户名：<? echo $arr[1];?>&nbsp;&nbsp;&nbsp;&nbsp;用户类别：<? echo $arr[6];?>
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
	