<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user数据表提取错误！<a href='index.php'>返回主页</a>");
	include 'function.php';
	$username=$_SESSION['username'];
	$sid=$_SESSION['sid'];
	link_server();
	$sql="select cid from choice where sid=$sid";
	$data=mysql_query($sql)
		or die("数据表无记录!");
	$count=mysql_num_rows($data);
	for($i=0;$i<$count;$i++){
		$Qnumber=$Qnumber+1;
		$a="ans".$Qnumber;
		$Uchoice=$_POST[$a];
		$sql="select score from score where choice='$Uchoice' and cid=$Qnumber";
		$data=mysql_query($sql) or die("数据表无记录!");
		$arr=mysql_fetch_row($data);
		$Uscore=$arr[0]+$Uscore;	
	} 
	$sql="select id from user where username='$username'";
	$data=mysql_query($sql) or die("数据表无记录！");
	$arr=mysql_fetch_row($data);
	$uid=$arr[0];
	$date=date("Y-m-d H:i:s");
	$sql="insert into record(sid,uid,score,date) values ($sid,$uid,$Uscore,'$date')";
	$cmd=mysql_query($sql) or die("数据表无记录！");
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>测试结果</title>
	<style type="text/css">
	body {
	background-color: #FFCCFF;
	background-image: url();
}
    </style>
	</head>
	<body>
	<div align="center">
	<h1>测试结果</h1>
	<p>***<font color="red" size="5"><?php echo $username.","."您的测试结果为：".$Uscore."分"; ?></font>***</p>
	<?php 
		switch($sid){
		case "1":
			echo "计分方法：";
			echo "把所以题目得分加起来，总分范围是10——40分，分值越高，自尊程度越高。";echo "<br>";echo "<br>";?>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;本篇小贴士：</font></p>
            <blockquote>
              <blockquote>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;自尊，即自我价值感，是通过社会比较形成的，是个体对其社会角色进行自我评价的结果。自尊需要是每一个个体生命的基本需要。
                  自尊策动人去追求和呈现一 种良好的社会形象，从而更好地适应社会环境。现实的自尊不足，或是与理想的自尊需要发生严重冲突的时候，心理问题就会随之产生。
                </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;自尊的心理品质，不是天生的，而是在生活，学习和工作中逐步培养起来的。要培养正确的自尊心，需要做到以下几点：</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;一、寻找个人自尊的支点，关于发现自己的优点与长处：</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;二、要有正确的方向，懂得把个人的自尊上升为集体自尊。如果一个人过于追求个人表面荣耀、光彩，就变成了虚荣心。</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;三、学会正确的社会比较。社会比较主要有两种方式：一种是与比自己强或好的人比较；另一种是与比我们弱或差的人比较。心理学家认为，
                  最理想的比较目标是与自己相近并略好于自己的人。</p>
              </blockquote>
            </blockquote>
            </div>
<?		
			break;	
		case "2":
			echo "计分方法：";
			echo "把所以题目得分加起来，总分范围在6分到30分之间，分数越高表面状态越差。";echo "<br>";echo "<br>";?>
			<table width="405" border="1" bordercolor="#00FF00" bgcolor="#FFFFFF">
			<caption>
			<font color="#0000FF" size="3">评估自信水平表</font>
			</caption>
			  <tr>
				<th width="64" bgcolor="#FFFF00" scope="col"><p>14-16岁</p>
				  <p>分数</p></th>
				<th width="63" bgcolor="#FFFF00" scope="col"><p>17-21岁</p>
				  <p>分数</p></th>
				<th width="62" bgcolor="#FFFF00" scope="col"><p>22-30岁</p>
				  <p>分数</p></th>
				<th width="64" bgcolor="#FFFF00" scope="col"><p>30岁以上</p>
				  <p>分数</p></th>
				<th width="118" bgcolor="#FFFF00" scope="col">自信水平</th>
			  </tr>
			  <tr>
				<td>0-8</td>
				<td>0-20</td>
				<td>0-12</td>
				<td>0-15</td>
				<td>非常强</td>
			  </tr>
			  <tr>
				<td>9-17</td>
				<td>21-36</td>
				<td>13-25</td>
				<td>16-29</td>
				<td>强</td>
			  </tr>
			  <tr>
				<td>18-33</td>
				<td>37-44</td>
				<td>26-40</td>
				<td>30-46</td>
				<td>中偏强</td>
			  </tr>
			  <tr>
				<td>34-54</td>
				<td>45-69</td>
				<td>14-59</td>
				<td>47-66</td>
				<td>中偏弱</td>
			  </tr>
			  <tr>
				<td>55-128</td>
				<td>70-128</td>
				<td>60-128</td>
				<td>67-128</td>
				<td>弱</td>
			  </tr>
			</table>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;本篇小贴士：</font></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;非常强：你的自信力不成问题。你常给人以很好的印象。你既不自疑，也不自卑。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;强：与你同龄组的人比较，你的自信水平是良好的。你常给他人留下不错的印象。你很少有自疑或自卑。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中偏强：你的自信水平在常态范围之内，但是有增强的发展趋势。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中偏弱：你的自信水平在常态范围之内，但是有减弱的发展趋势。你有自疑的倾向，常担心会给他人留下不好的印象。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;弱：对你来说，自信心是个严重的问题。你总悬念着你会给他人留下什么印象。你希望能更自信、更老练的处理生活中的问题。</p>
			</div>
			<?
			break;
		case "3";
			echo "计分方法：";
			echo "分别数数你回答“否”、“不知道”的个数，每个“否”记2分，每个“不知道”记1分，答“是”不计分，总分就是你测验了的分数。根据总分和你的年龄，查看下表，就可以知道你的谨慎水平了。";echo "<br>";echo "<br>";?>
			<table width="455" border="1" bordercolor="#00FF00">
              <caption>
              <font color="#0000FF" size="3"> 评估谨慎水平表</font>
              </caption>
			  <tr>
                <th width="79" height="52" bgcolor="#FFFF00" scope="col"><p>14-16岁</p>
                <p>分数</p></th>
			    <th width="80" bgcolor="#FFFF00" scope="col"><p>17-21岁</p>
		        <p>分数</p></th>
			    <th width="79" bgcolor="#FFFF00" scope="col"><p>22-30岁</p>
		        <p>分数</p></th>
			    <th width="80" bgcolor="#FFFF00" scope="col"><p>30岁以上</p>
		        <p>分数</p></th>
			    <th width="103" bgcolor="#FFFF00" scope="col">谨慎水平</th>
		      </tr>
              <tr>
                <td height="33">42-48</td>
                <td> 40-48</td>
                <td>40-48</td>
                <td>42-48</td>
                <td>非常强</td>
              </tr>
              <tr>
                <td height="35">40-41</td>
                <td> 34-39</td>
                <td>33-39</td>
                <td>38-41</td>
                <td>强</td>
              </tr>
              <tr>
                <td height="30">34-39</td>
                <td>31-33</td>
                <td> 29-32 </td>
                <td>33-37</td>
                <td>中偏强</td>
              </tr>
              <tr>
                <td height="33">25-33</td>
                <td>23-30</td>
                <td>22-28</td>
                <td>28-32</td>
                <td>中偏弱</td>
              </tr>
              <tr>
                <td height="34">0-24</td>
                <td> 0-22</td>
                <td>0-21</td>
                <td>0-27</td>
                <td>弱</td>
              </tr>
            </table>
            <div align="left">
			<p>&nbsp;</p>
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;本篇小贴士：</font></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;非常强：你的态度非常谨慎，不冒任何风险。你总是会安然无恙的。你的这种态度，在人际关系中，常倾向保守和多疑。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;强：在你的年龄组，你比其他人要谨慎得多。你总是尽力避免危险，以求安全。在人际关系中，你显得谨慎而保守。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中偏强：你的谨慎水平在常态范围之内，但是有增强的发展趋势。你一般不会鲁莽行事。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中偏弱：你的谨慎水平在常态范围之内，但是有减弱的发展趋势。你有冒险的倾向，有时稍有莽撞的表现。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;弱：你谨慎不足，鲁莽有余。你敢于冒险，伏有危机。但是你的无忧无虑的态度也大有好处：与人相处随和，能乐观地处理生活中的
			难题。可是还得劝告你：遇事三思，不可贸然行动。这当然不是让你去做懦夫。</p>
            </div>
		<?	
			break;
		case "4";
			echo "计分方法：";
			echo "本量表共有18项。总分范围在14到124之间。得分越高，幸福感越高。";echo "<br>";echo "<br>";?>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;本篇小贴士：</font></p>
			
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;心理学上把幸福感又称作主观幸福感（简称SWB），主观是指人们对其生活质量所做的整体评价。可以这样说，决定人们是否幸福的并不是
			实际发生了什么，关键是人们对所发生的事情做出何种解释，因而幸福感是一种主观的概念，它主要由两个部分构成：情感平衡和生活满意度。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;研究表明，影响人幸福的因素有很多，包括遗传因素（基因素质）、家庭与社会环境、工作学习负荷量（特别是对年轻人与中年人）、人格
			因素、性别因素以及社会支持网络等。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;因此提升幸福感的途径可以从以下两个方面考虑，从内部因素讲，幸福感的感受和体验取决于人的内在素质，取决于人的境界，要不断丰富自己
			的内心；从外部因素讲，幸福感的产生不仅存在于结果中，还存在于“成长”过程中。与财富共成长，与人共成长，与事业共成长。</p>
            </div>
			
		<?
			break;
		case "5";
			echo "计分方法及解释：";
			echo "把20项题目得分加起来分别得到生活满意度指数得分，得分越高生活满意度越高。";echo "<br>";echo "<br>";?>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;本篇小贴士：</font></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;心理学上把幸福感又称作主观幸福感（简称SWB），主观是指人们对其生活质量所做的整体评价。可以这样说，决定人们是否幸福的并不是
			实际发生了什么，关键是人们对所发生的事情做出何种解释，因而幸福感是一种主观的概念，它主要由两个部分构成：情感平衡和生活满意度。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;研究表明，影响人幸福的因素有很多，包括遗传因素（基因素质）、家庭与社会环境、工作学习负荷量（特别是对年轻人与中年人）、人格
			因素、性别因素以及社会支持网络等。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;因此提升幸福感的途径可以从以下两个方面考虑，从内部因素讲，幸福感的感受和体验取决于人的内在素质，取决于人的境界，要不断丰富自己
			的内心；从外部因素讲，幸福感的产生不仅存在于结果中，还存在于“成长”过程中。与财富共成长，与人共成长，与事业共成长。</p>
            </div>
			
		<?
			break;
		}
	?>
		
		
				 
				 
		<br>
		<br>
		<br>
		<a href="index.php">返回主页</a>
	
	</div>
	</body>
</html>
