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
		die('<br>'.$_POST["id"].'���û����Ѿ�ע��<a href="register.html">����</a>');
	}
	//���Ӽ�¼
	$sql="insert into user(username,pwd,age,email,name,type,date) values('".$_POST['username']."','";
	$sql.=$_POST["pwd"]."',".$_POST["age"].",'".$_POST["email"]."','".$_POST["name"]."',".$_POST["type"].",'";
	$sql.=date("Y-m-d H:i:s")."');";
	$data=mysql_query($sql) or die("<br>�������ݱ��¼ʧ�ܡ�<br>");
	//��ʾ���յ�������
	print "<br>�û�����".$_POST["username"];
	print "<br>���룺".$_POST["pwd"];
	print "<br>���䣺".$_POST["age"];
	print "<br>���䣺".$_POST["email"];
	print "<br>������".$_POST["name"];
	print "<br>�û����".$_POST["type"];
	print "<br>ע��ʱ�䣺".date("Y- m- d H:i:s");
	//���ûػ���������index_menu.php
	$_SESSION["username"]=$_POST['username'];
	$_SESSION["pwd"]=$_POST['pwd'];
	print '<br><br>�ɹ�ע��. ';
	print '<meta http-equiv="refresh" content="7;URL=index_menu.php"/>';	
?>