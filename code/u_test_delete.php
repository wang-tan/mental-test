<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
	$username=$_SESSION['username'];
	$sql="select id from user where username='$username'";
	$data=mysql_query($sql) or die("���ݱ��޼�¼��");
	$arr=mysql_fetch_row($data);
	$uid=$arr[0];
	$sql="select * from record where uid=$uid";
	$data=mysql_query($sql)
		or die("���ݱ��޼�¼!");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>ɾ�����Լ�¼</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<form name="form5" method="post" action="u_check_delete.php">
		<table width="500" border="0">
		<p>***<font color="#0000FF" size="6">��ѡ����Ҫɾ���Ĳ��Լ�¼</font>***</p>
		
		<?php while($arr=mysql_fetch_row($data)){?>
				<input name="id" type="radio" value="<?php echo $arr[0]; ?>" checked>
		        ���Ա��ţ�<? echo $arr[1];?>&nbsp;&nbsp;&nbsp;&nbsp;������<? echo $arr[3];?>&nbsp;&nbsp;&nbsp;&nbsp;����ʱ�䣺<? echo $arr[4];?>
				<p>
		<?php } ?>
		<br>
		<tr>
			<td>
			<div align="center">
                <input name="submit" type="submit" value="ȷ��ɾ��">
			</div>
			</td>
		</tr>
		</table>
		<br>
	</form>
	</div>
</body>
</html>
	