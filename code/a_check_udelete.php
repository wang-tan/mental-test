<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
	$id=$_POST['id'];
	$sql="select * from user where id=$id";
	$data=mysql_query($sql)
		or die("���ݱ��޼�¼!");
	$arr=mysql_fetch_row($data);
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>ɾ���û�</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<p><font color="#0000FF" size="5">��ɾ�����û���ϢΪ��</font></p>
	�û���ţ�<? echo $arr[0];?><p>
	�û�����<? echo $arr[1];?><p>
	���䣺<? echo $arr[3];?><p>
	���䣺<? echo $arr[4];?><p>
	������<? echo $arr[5];?><p>
	�û����<? echo $arr[6];?><p>
	ע��ʱ�䣺<? echo $arr[7];?><p>
	<? $sql="delete from record where id=$id";
	   $rec=mysql_query($sql) or die("ɾ����¼ʧ�ܣ�");
	?>
	</p>
	<p><font color="red" size="5">ɾ���û��ɹ���</font></p>
	<br>
	<br>
	<br>
	<a href="index.php">������ҳ</a>
	</div>
</body>
</html>	