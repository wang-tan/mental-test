<?php
	//ϵͳ��ʼ��������Ự����
	session_start();
	if(isset($_SESSION["username"])){
		session_destroy();
	}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>���������������վ</title>
    <style type="text/css">
    body,td,th {
	color: #000;
	font-family: "��������", "����", "����", "������κ", "����_GB2312";
}
body {
	background-color: #F9F;
	background-image: url(images/%E5%B0%8F%E5%AD%A9%E5%84%BF.jpg);
	background-repeat: repeat;
	font-family: "��������", "����", "����", "������κ", "����_GB2312";
}
    .ys01 {
	font-family: "����";
	font-size: 24px;
}
    .STYLE2 {
	font-family: "����";
	font-size: 24px;
	color: #0000FF;
	font-weight: bold;
}
    </style>
    </head>
	<body>
	<?
		//��ҳҳ�涥��
		include "function.php";//�����ⲿ�ļ�
		$pag_top_note="��ӭ���ʱ�վ���¼��ע�ᡣ";
		//$pag_top_caption,$pag_top_note��function.php����
		pag_top($pag_top_caption,$pag_top_note);
	?>
	<div align="center">
	<hr><!--������վ����˵��-->
	<form name="form1" method="post" action="index_check.php">
		<p><!--����վ����ʾ��Ϣ-->
		  <textarea name="textarea" cols="85" rows="5">
			��ӭ���ʰ��������������վ����վ�ṩ���²���ְ�ܣ�
			1.ѡ��<�û�ע��>����д��Ҫ���ϣ����Գ�Ϊ��ͨ�û���
			2.ѡ��<��¼>���û����Ե�¼�������������վ��
			3.ѡ��<��ϵ����>���û��밮�������������վ��ϵ��
			4.ѡ��<��������>���û����ʼ�����վ����Ա��
		  </textarea>
	  </p>
		<p>		  <span class="STYLE2">&nbsp; �û���¼</span>	  </p>
		<p> �� �� ��:
          <input name="username" type="text" size="20">
	  </p>
		<p> �� &nbsp; &nbsp; ��:          
		  <input name="pwd" type="password" size="20" maxlength="6">
        </p>
<p>&nbsp;
  &nbsp; 
  &nbsp; 
  &nbsp; 
  <input name="submit" type="submit" value="��¼">
&nbsp;
		               <input name="reset" type="reset" value="����"></p>
	    <p><a href="register.html"> &nbsp;&nbsp;�û�ע�� </a><a href="mailto:my_mail@163.com">��ϵ����</a></p>
	    <p> Copyright&copy;2014love health.com</p>
    </form>
	<?
		//��ҳҳ��ײ�
		//$pag_bottom_caption,$web_email��function.php������
		pag_bottom($pag_bottom_caption,$web_email);
	?>
	</div>
	</body>
</html>
	
	
	
	
	
	
	
	