<?
	//�����Ự�������ɹ�ע����л���index_menu.php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
	$sid=$_POST['sid'];
	$uid=$_POST['uid'];
	$score=$_POST['score'];
	$date=$_POST['date'];
	$sql="insert into record(sid,uid,score,date) values('".$sid."','".$uid."','".$score."','".$date."')";
	$data=mysql_query($sql) or die("��������ʧ�ܣ�");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>����û����Լ�¼</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<p><font color="red" size="3">����û����Լ�¼�ɹ���</font></p><br><br>
	<p>��ӵ��û����Լ�¼���£�</p>
	<p>���Ա��ţ�<? echo $sid;?>
	<p>�û���ţ�<? echo $uid;?>
	<p>�û��÷֣�<? echo $score;?>
	<p>����ʱ�䣺<? echo $date;?>
	</div>
</body>
</html>