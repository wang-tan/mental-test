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
	$sql="select * from user where id=$uid";
	$data=mysql_query($sql)
		or die("���ݱ��޼�¼!");
	$arr=mysql_fetch_row($data);
?>

<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>�޸�ע����Ϣ</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<h3>����ע����Ϣ���£�</h3>
	�û�����<? echo $arr[1];?><br>
	���룺<? echo $arr[2];?><br>
	���䣺<? echo $arr[3];?><br>
	���䣺<? echo $arr[4];?><br>
	������<? echo $arr[5];?><br>
	�û����<? echo $arr[6];?><br>
	ע��ʱ�䣺<? echo $arr[7];?><br>
	<hr>
	<form name=form4" action="u_check_update.php" method="post">
			<h1>�������޸ĵ���Ϣ��</h1>
			<font color="red" size="3">ע�⣺�����û��������޸ģ�</font>
			<p align="center">����
				<input name="pwd" type="password" size="20" maxlength="6"></p>
			<p>ȷ������
				<input name="pwd2" type="password" size="20" maxlength="6"></p>
			<p>����
				<input name="age" type="text" size="20" maxlength="6"></p>
			<p>����
				<input name="email" type="text" size="20" maxlength="20"></p>
			<p>����
				<input name="name" type="text" size="20" maxlength="10"></p>
			<p>�û����
				<input name="type" type="radio" value="1" checked>��ͨ�û�
				<input name="type" type="radio" value="2" checked>ϵͳ����Ա</p>
			<p><input name="submit" type="submit" value="�ύ">
			   <input name="reset" type="reset" value="������д">
		    </p>
	</form>
	</div>
</body>       
</html>