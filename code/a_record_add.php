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
		<title>����û����Լ�¼</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<form name="form11" method="post" action="a_check_radd.php">
		<p>***<font color="#0000FF" size="6">��������Ҫ��ӵ��û����Լ�¼</font>***</p>
		<p>���Ա��ţ�<input name="sid" type="text" size="20"></p>
		<p>�û���ţ�<input name="uid" type="text" size="20"></p>
		<p>���Ե÷֣�<input name="score" type="text" size="20"></p>
		<p>����ʱ�䣺<input name="date" type="text" size="20"></p>
		<p>
	  <div align="center">
                <input name="submit" type="submit" value="ȷ�����">
				<input name="reset" type="reset" value="������д">
	  </div>
	</form>
	</div>
</body>
</html>