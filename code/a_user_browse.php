<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
	$sql="select * from user";
	$data=mysql_query($sql) or die("���ݱ��޼�¼��");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>����û�</title>
    <style type="text/css">
<!--
body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
}
-->
</style></head>
	<body>
	<div align="center"><p>
	<h2>�û��б����£�</h2>
	<table border="1" bordercolor="#00FF00" bgcolor="#FFFFFF">
	<tr>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>�û����</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>�û���</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col">����<p></p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>����</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>����</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>�û����</p>
		</th>
		<th width="100" bgcolor="#FFFF00" scope="col"><p>ע��ʱ��</p>
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
	</div>
	</body>
</html>