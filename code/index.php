<?php
	//系统初始化，清理会话变量
	session_start();
	if(isset($_SESSION["username"])){
		session_destroy();
	}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
		<title>爱健康心理测试网站</title>
    <style type="text/css">
    body,td,th {
	color: #000;
	font-family: "华文中宋", "楷体", "隶书", "华文新魏", "楷体_GB2312";
}
body {
	background-color: #F9F;
	background-image: url(images/%E5%B0%8F%E5%AD%A9%E5%84%BF.jpg);
	background-repeat: repeat;
	font-family: "华文中宋", "楷体", "隶书", "华文新魏", "楷体_GB2312";
}
    .ys01 {
	font-family: "宋体";
	font-size: 24px;
}
    .STYLE2 {
	font-family: "宋体";
	font-size: 24px;
	color: #0000FF;
	font-weight: bold;
}
    </style>
    </head>
	<body>
	<?
		//网页页面顶部
		include "function.php";//导入外部文件
		$pag_top_note="欢迎访问本站请登录或注册。";
		//$pag_top_caption,$pag_top_note在function.php设置
		pag_top($pag_top_caption,$pag_top_note);
	?>
	<div align="center">
	<hr><!--设置网站操作说明-->
	<form name="form1" method="post" action="index_check.php">
		<p><!--设置站点提示信息-->
		  <textarea name="textarea" cols="85" rows="5">
			欢迎访问爱健康心理测试网站，本站提供以下操作职能：
			1.选择<用户注册>，填写必要资料，可以成为普通用户。
			2.选择<登录>，用户可以登录爱建心理测试网站。
			3.选择<联系我们>，用户与爱健康心理测试网站联系。
			4.选择<电子邮箱>，用户发邮件到网站管理员。
		  </textarea>
	  </p>
		<p>		  <span class="STYLE2">&nbsp; 用户登录</span>	  </p>
		<p> 用 户 名:
          <input name="username" type="text" size="20">
	  </p>
		<p> 密 &nbsp; &nbsp; 码:          
		  <input name="pwd" type="password" size="20" maxlength="6">
        </p>
<p>&nbsp;
  &nbsp; 
  &nbsp; 
  &nbsp; 
  <input name="submit" type="submit" value="登录">
&nbsp;
		               <input name="reset" type="reset" value="重置"></p>
	    <p><a href="register.html"> &nbsp;&nbsp;用户注册 </a><a href="mailto:my_mail@163.com">联系我们</a></p>
	    <p> Copyright&copy;2014love health.com</p>
    </form>
	<?
		//网页页面底部
		//$pag_bottom_caption,$web_email在function.php中设置
		pag_bottom($pag_bottom_caption,$web_email);
	?>
	</div>
	</body>
</html>
	
	
	
	
	
	
	
	