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
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>��ѯ���Լ�¼</title>
    <style type="text/css">
<!--
body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
}
-->
</style></head>
	<body>
	<div align="center"><p>
	<h2>��ѯ���Լ�¼��</h2>
	<form name="form6" method="post" action="u_check_find.php">
		<p>�����ѯ������</p>
		<hr>
		<p>�û�����
		<input name="username" type="text" size="20">
		<p>���Ա��ţ�
		<input name="sid" type="text" size="20">
		<div align="center">
		<p><input name="submit" type="submit" value="��ѯ">
		<hr>
		</div>
		<br>
	</form>
	</div>
	</body>
</html>