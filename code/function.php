<?php
	//pag_top($pag_top_caption,$pag_top_note)
	$pag_top_caption="���������������վ";
	$pag_top_note="";
	//pag_bottom($pag_bottom_caption,$web_email);
	$pag_bottom_caption="�ذ��������ذ�����";
	$web_email='my_mail@163.com';
	function link_server(){
		//���ӷ����������ݿ�
		$conn=mysql_connect("localhost","root","1234") or
		die("�������ݿ������ʧ�ܡ�<a href='index.php'>����</a>");
		mysql_select_db("health",$conn) or	
		die("�������ݿ�ʧ�ܡ�<a href='index.php'>����</a>");
		mysql_query("SET NAMES 'GB2312'");
		}
	function pag_top($pag_top_caption,$pag_top_note){
		//��ҳ���򶥲�
		//�����ҳ���򶥲���ʾ2����ʾ
		$pag_top_note.='����ʱ�̣�'.date("Y��m��d��Hʱs��i��");
		print'<table align="center" width="710" border="0">';
		//��ʾ��һ��
		print' <tr><td width="700" height="40" >';
		print' <h1><strong'.$pag_top_caption.'></strong></h1>';
		print' </marquee></td></tr>';
		//��ʾ�ڶ���
		print' <tr><td bgcolor="# 99FFFF">';
		print' <marquee direction= left>';
		print $pag_top_note;
		print' </marquee></td></tr>';
		print' </table>';	
	}
	function pag_bottom($pag_bottom_caption,$web_email){
		//��ҳ����ײ�
		print'<hr>';
		print' <table width="710" border="0">';
		print' <tr><td align="center">';
		print $pag_bottom_caption.'</td></tr>';
		print' <tr><td align="center">��ϵ��վ';
		print' <a href="mailto:'.$web_email.'">��������</a>';
		print' </td></tr>';
		print' </table>';	
	}
	function pag_menu($menu_disp){
		//��ҳ����ײ�
		include "pag_menu.php";
		if( $menu_disp==1)//����Ȩ�����ò�ͬ�Ĳ˵���
			$menu_item=$menu_1;
		else
		if( $menu_disp==2)//����Ȩ�����ò�ͬ�Ĳ˵���
			$menu_item=$menu_2;
		else
			$menu_item=$menu_1.$menu_2;
		//��ʾ�˵�
		$item_count=count($menu_item);//�˵���Ŀ��
		$table_width=$item_count*5*15;
		print '<table align="center" border="0">';
		print"<tr>";
		for($i=0;$i<$item_count;$i++){
			//�����ҳ�Ѿ������ͽ��г������ӷ�����ʾ
			// if(file_exists($menu_item[$i][1])){
				print '<td height="6"><h5>';
				print '<a href="'.$menu_item[$i][1].'">'.$menu_item[$i][0].'</a>';
				print '</h5></td>';
			//}
		}
		print "</tr>";
		print "</table>";
	}
?>