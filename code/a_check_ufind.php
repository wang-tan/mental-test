<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
	$uid=$_POST['uid'];
	$type=$_POST['type'];
	$sql="select * from user where id=$uid and type=$type";
	$data=mysql_query($sql)
		or die("���ݱ��޼�¼!");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>��ѯ�û�</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<p><font color="#0000FF" size="5">��������ѯ�������û�Ϊ��</font></p>
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
	<br>
	<br>
	<br>
	<a href="index.php">������ҳ</a>
	</div>
</body>
</html>	