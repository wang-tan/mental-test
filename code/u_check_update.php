<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	link_server();
	$username=$_SESSION['username'];
?>
<?
	$i=0;
	//�������
	if(! ereg("^([a-zA-Z0-9_-]{6})",$_POST["pwd"]))
		$err[$i++]="��������������6λ��ĸ�����֣�";
	if(strcmp($_POST["pwd"],$_POST["pwd2"])!=0)
		$err[$i++]="���������������벻һ�£�";
	//�������
	if(! ereg("^([1-200])",$_POST["age"]))
		$err[$i++]="���������1-200�����֣�";
	//�����������
	if(!ereg("^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+",$_POST["email"]))
		$err[$i++]="�����ʽ����";
	//�������
	if(strlen(trim($_POST["name"]))<4 or ! is_string($_POST["name"]))
		$err[$i++]="���������������������2�����Ϻ��ӡ�";
	//����û����
	if(empty($_POST["type"]))
		$err[$i++]="��ѡ���û����";
	//��ӡ������ʾ
	for($j=0;$j<$i;$j++)
		print "<br> $err[$j]";
	if($i!=0){
		//��������
		die('<br> <a href="register.html">����</a>');
	}
	//�޸ļ�¼
	$sql="update user set pwd='".$_POST["pwd"]."',age=".$_POST["age"].",email='".$_POST["email"]."',name='".$_POST["name"]."',type=".$_POST["type"].",date='".date("Y-m-d H:i:s")."' where username='".$username."';";
	$data=mysql_query($sql) or die("<br>�޸����ݱ��¼ʧ�ܡ�<br>");
	//��ʾ���յ�������
	print "<br>�û�����".$username;
	print "<br>���룺".$_POST["pwd"];
	print "<br>���䣺".$_POST["age"];
	print "<br>���䣺".$_POST["email"];
	print "<br>������".$_POST["name"];
	print "<br>�û����".$_POST["type"];
	print "<br>ע��ʱ�䣺".date("Y- m- d H:i:s");
	print '<br><br>�޸���Ϣ�ɹ���';	
?>