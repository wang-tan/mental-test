<?php
	session_start();
	//index.php������û���������$_POST['username'],�û����뱣����$_POST['pwd']
	//ֻҪ�û�����������һ��û������ͻ���ʾ������ֹ����
	if(empty($_POST['username']) or empty($_POST['pwd']))
		die("�û��������벻�ܿ�ȱ��<br>
			<a href='index.php'>����</a>");
	//���ӷ����������ݿ�
	include 'function.php';
	link_server();
	//����¼��Ա�Ƿ��Ѿ�ע��
	
	$sql="select * from user where username='".$_POST['username']."' and pwd='".$_POST['pwd']."'";
	
	
	$data=mysql_query($sql) or
		die($_POST['username']."user���ݱ���ȡ���󣡵�¼ʧ�ܡ�<a href='index.php'>������ҳ</a>");
	$rec_count=mysql_num_rows($data);//�õ���¼����
	if($rec_count!=1)//�õ���¼����С��1��ʾ������û���Ϣ������
		die($_POST['username']."���û������¼������󣡵�¼ʧ�ܡ�<a href='index.php'>������ҳ</a>");
	$rec=mysql_fetch_array($data) or die("user���ݱ��¼����<a href='index.php'>������ҳ</a>");
	//�Ѿ�ע����û������Ե�¼��վ
	$_SESSION["username"]=$_POST['username'];
	$_SESSION["pwd"]=$_POST['pwd'];
	//��ת���˵���ҳ
	print'<meta http-equiv="refresh" content="2;URL=index_menu.php"/>';
?>