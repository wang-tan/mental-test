<?php
	//pag_top($pag_top_caption,$pag_top_note)
	$pag_top_caption="爱健康心理测试网站";
	$pag_top_note="";
	//pag_bottom($pag_bottom_caption,$web_email);
	$pag_bottom_caption="关爱健康，关爱心理";
	$web_email='my_mail@163.com';
	function link_server(){
		//连接服务器和数据库
		$conn=mysql_connect("localhost","root","1234") or
		die("连接数据库服务器失败。<a href='index.php'>返回</a>");
		mysql_select_db("health",$conn) or	
		die("连接数据库失败。<a href='index.php'>返回</a>");
		mysql_query("SET NAMES 'GB2312'");
		}
	function pag_top($pag_top_caption,$pag_top_note){
		//网页程序顶部
		//设计网页程序顶部显示2行提示
		$pag_top_note.='现在时刻：'.date("Y年m月d日H时s分i秒");
		print'<table align="center" width="710" border="0">';
		//显示第一行
		print' <tr><td width="700" height="40" >';
		print' <h1><strong'.$pag_top_caption.'></strong></h1>';
		print' </marquee></td></tr>';
		//显示第二行
		print' <tr><td bgcolor="# 99FFFF">';
		print' <marquee direction= left>';
		print $pag_top_note;
		print' </marquee></td></tr>';
		print' </table>';	
	}
	function pag_bottom($pag_bottom_caption,$web_email){
		//网页程序底部
		print'<hr>';
		print' <table width="710" border="0">';
		print' <tr><td align="center">';
		print $pag_bottom_caption.'</td></tr>';
		print' <tr><td align="center">联系本站';
		print' <a href="mailto:'.$web_email.'">电子邮箱</a>';
		print' </td></tr>';
		print' </table>';	
	}
	function pag_menu($menu_disp){
		//网页程序底部
		include "pag_menu.php";
		if( $menu_disp==1)//根据权限设置不同的菜单项
			$menu_item=$menu_1;
		else
		if( $menu_disp==2)//根据权限设置不同的菜单项
			$menu_item=$menu_2;
		else
			$menu_item=$menu_1.$menu_2;
		//显示菜单
		$item_count=count($menu_item);//菜单项目数
		$table_width=$item_count*5*15;
		print '<table align="center" border="0">';
		print"<tr>";
		for($i=0;$i<$item_count;$i++){
			//如果网页已经建立就进行超级链接否则不显示
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