<?
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
?>
<?php
	//�������ݿ�����ݱ�
	include "function.php";
	link_server();
	//ʶ���¼��Ա����ݣ�����Ա/��ͨ�û�
	
	$cmd="select * from user where username='".$_SESSION['username']."' and pwd='".$_SESSION['pwd']."'";
	$data=mysql_query($cmd) or
		die($_SESSION['username']."user���ݱ���ȡ���󣡵�¼ʧ�ܡ�<a href='index.php'>������ҳ</a>"); 
	$rec=mysql_fetch_array($data);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>��ӭ���ʰ��������������վ</title>
		<style type="text/css">
		body,td,th {
			color: #000000;
		}
		body {
	background-image: url(images/%E5%90%91%E6%97%A5%E8%91%B5.jpg);
	background-color: #FFFFFF;
		}
		</style>
	</head>
		 &nbsp;
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
		 &nbsp; 
	<body>
	<?
	//��ҳҳ�涥��
	$pag_top_note='���ã�'.$_SESSION["username"]."".$rec["name"];
	pag_top($pag_top_caption,$pag_top_note);
	?>
	<?
	//����$rec['type']��ʾ��ͨ�û������Ա�˵�����
	pag_menu($rec['type']);
	?>
	<div align="center"> 
		 <textarea name="textarea" cols="85" rows="5">
			��ӭ���ʰ��������������վ����վ�ṩ���²���ְ�ܣ�
				1.ѡ�񵼺��˵�����ɲ�����
				2.��ͨ�û��͹���Ա�û��ĵ����˵���ʾ��ͬ��
		</textarea>
	<?
	//��ҳҳ��ײ�$pag_bottom_caption,$web_email��function.php����
	pag_bottom($pag_bottom_caption,$web_email);
	?>
	<p>
	<a href="introduce.php">��վ����</a>
	<a href="about.php">��������</a>
	</div>
	</body>
</html>		
