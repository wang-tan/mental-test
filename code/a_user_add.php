<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>����û�</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<form name="form12" method="post" action="a_check_uadd.php">
		<p>***<font color="#0000FF" size="6">��������Ҫ��ӵ��û���Ϣ</font>***</p>
		<hr>
			<p align="center">�û���
				<input name="username" type="text" size="20" maxlength="10"></p>
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