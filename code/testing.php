<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	link_server();
	$sid=$_POST['id'];
	session_register("sid");
	$sql="select remark from subject where id=$sid";
	$data=mysql_query($sql)
		or die("数据表无记录!");
	$remark=mysql_fetch_row($data);
	$sql="select * from choice where sid=$sid";
	$data=mysql_query($sql)
		or die("数据表无记录！");
	$num=mysql_num_rows($data);
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>测试表</title>
	<style type="text/css">
	body {
	background-image: url(images/%E5%BF%83.jpg);
}
    </style>
	</head>
	<body>
	<div align="center">
  <h1>开始测试吧</h1>
		<form name="form3" method="post" action="check_test.php">
		<table width="800" border="0">
		<p>***<font color="#0000FF" size="5"><?php echo $remark[0]; ?></font></p>
		
		<?php while($arr=mysql_fetch_row($data)){ 
			$Qnumber=$Qnumber+1;
			$arr=array_filter($arr); $count=count($arr);
			 echo $arr[2];echo ".";echo $arr[3];echo "</br>";?>
				
				<?php for($i=4;$i<$count;$i++){?>
					<input name="ans<? echo $Qnumber;?>" type="radio" value="<? echo $arr[$i];?>">
				 <?echo $arr[$i];?>
				 <br>
				 <?}?>	
				
		<?}?>	
				 
				 
		<tr>
			<td>
				<br>
				<div align="center">
                <input name="submit" type="submit" value="确认提交">
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
