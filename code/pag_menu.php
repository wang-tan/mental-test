<?php
	//菜单数据
	//该程序由function.php的pag_menu()函数调用
	//实际应用在index_menu.php
	//该文件记录普通用户和系统管理员的菜单项目条目名称
	//和对应的超级链接文件名，每个菜单条目由2项组成
	//某个菜单条目为“”空白表示空缺或没有建立网页程序
	//普通用户
	$menu_1=array(array("修改用户信息","u_update.php"),
				 array("浏览测试记录","u_test_browse.php"),
				 array("查询测试记录","u_test_find.php"),
				 array("删除测试记录","u_test_delete.php"),
				 array("退出","index.php"),
				 array("开始测试","test.php")
				 );
	//系统管理员
	$menu_2=array(array("浏览测试表目录","a_test_browse.php"),
				 array("浏览用户","a_user_browse.php"),
				 array("查询用户","a_user_find.php"),
				 array("删除用户","a_user_delete.php"),
				 array("添加用户","a_user_add.php"),
				 array("浏览用户测试记录","a_record_browse.php"),
				 array("查询用户测试记录","a_record_find.php"),
				 array("删除用户测试记录","a_record_delete.php"),
				 array("添加用户测试记录","a_record_add.php"),
				 array("退出","index.php")
				 );
?>