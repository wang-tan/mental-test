<?
	//�����Ự�������ɹ�ע����л���index_menu.php
	session_start();
?>
<?
	$i=0;
	//����û���
	if(empty($_POST["username"]))
		$err[$i++]="�������û�����";
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
	//���ӷ����������ݿ�
	include 'function.php';
	link_server();
	$cmd="select * from user where username="."'".$_POST["username"]."'";
	$data=mysql_query($cmd) or die("<br>���ݱ��޼�¼��</br>");
	$rec_count=mysql_num_rows($data);//�ڲ�����
	if($rec_count>0){
		die('<br>'.$_POST["id"].'���û����Ѿ�ע��<a href="a_user_add.php">����</a>');
	}
	//���Ӽ�¼
	$sql="insert into user(username,pwd,age,email,name,type,date) values('".$_POST['username']."','";
	$sql.=$_POST["pwd"]."',".$_POST["age"].",'".$_POST["email"]."','".$_POST["name"]."',".$_POST["type"].",'";
	$sql.=date("Y-m-d H:i:s")."');";
	$data=mysql_query($sql) or die("<br>�������ݱ��¼ʧ�ܡ�<br>");
?>
<html>
    <head>
        <meta http-equiv= "Content-Type" content="text/html; charset=gb2312"/>
		<title>����û�</title>
    </head>
	<body background="images/���տ�.jpg">
	<div align="center"><p>
	<p><font color="red" size="5">����û��ɹ���</font></p><br><br>
	<p>��ӵ��û���Ϣ���£�</p>
	<p>�û�����<? echo $_POST["username"];?>
	<p>���룺<? echo $_POST["pwd"];?>
	<p>���䣺<? echo $_POST["age"];?>
	<p>���䣺<? echo $_POST["email"];?>
	<p>������<? echo $_POST["name"];?>
	<p>�û����<? echo $_POST["type"];?>
	<p>ע��ʱ�䣺<? echo date("Y- m- d H:i:s");?>
	</div>
</body>
</html>

