<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$sql="select * from subject";
	$subject=mysql_query($sql)
		or die("数据表无记录!");
		//$arr=mysql_fetch_row($subject);
		//print_r($arr);
	//print_r(mysql_fetch_row($subject));
?>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>开始心理测试首页</title>
    <style type="text/css">
    body {
	background-image: url(images/%E5%B0%8F%E5%A5%B3%E5%AD%A9.jpg);
}
    </style>
    </head>
	<body>
	<div align="center">
  <h1>心理测试主题</h1>
		<form name="form2" method="post" action="testing.php">
		<table width="500" border="0">
		<p>***<font color="#0000FF" size="5">请从下面的目录中选择一个测试主题</font>***</p>
		
		<?php while($arr=mysql_fetch_row($subject)){?>
				<input name="id" type="radio" value="<?php echo $arr[0]; ?>" checked>
		        <?php echo $arr[0];echo '.'; echo $arr[1]; ?>
				<br>
				<br>
				<br>
		<?php } ?>
		<br>
		<tr>
			<td>
			<div align="center">
                <input name="submit" type="submit" value="确定">
			</div>
			</td>
		</tr>
		</table>
		<br>
		<a href="index.php">返回主页</a>
		</form>
	</div>
	</body>
</html>
		
		
		
		
		
	
	
	
	
	