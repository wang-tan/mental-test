<?php
	session_start();
	if(!isset($_SESSION["username"]))
	die($_SESSION["username"]."user���ݱ���ȡ����<a href='index.php'>������ҳ</a>");
	include 'function.php';
	$username=$_SESSION['username'];
	$sid=$_SESSION['sid'];
	link_server();
	$sql="select cid from choice where sid=$sid";
	$data=mysql_query($sql)
		or die("���ݱ��޼�¼!");
	$count=mysql_num_rows($data);
	for($i=0;$i<$count;$i++){
		$Qnumber=$Qnumber+1;
		$a="ans".$Qnumber;
		$Uchoice=$_POST[$a];
		$sql="select score from score where choice='$Uchoice' and cid=$Qnumber";
		$data=mysql_query($sql) or die("���ݱ��޼�¼!");
		$arr=mysql_fetch_row($data);
		$Uscore=$arr[0]+$Uscore;	
	} 
	$sql="select id from user where username='$username'";
	$data=mysql_query($sql) or die("���ݱ��޼�¼��");
	$arr=mysql_fetch_row($data);
	$uid=$arr[0];
	$date=date("Y-m-d H:i:s");
	$sql="insert into record(sid,uid,score,date) values ($sid,$uid,$Uscore,'$date')";
	$cmd=mysql_query($sql) or die("���ݱ��޼�¼��");
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>���Խ��</title>
	<style type="text/css">
	body {
	background-color: #FFCCFF;
	background-image: url();
}
    </style>
	</head>
	<body>
	<div align="center">
	<h1>���Խ��</h1>
	<p>***<font color="red" size="5"><?php echo $username.","."���Ĳ��Խ��Ϊ��".$Uscore."��"; ?></font>***</p>
	<?php 
		switch($sid){
		case "1":
			echo "�Ʒַ�����";
			echo "��������Ŀ�÷ּ��������ַܷ�Χ��10����40�֣���ֵԽ�ߣ�����̶�Խ�ߡ�";echo "<br>";echo "<br>";?>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;��ƪС��ʿ��</font></p>
            <blockquote>
              <blockquote>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;���𣬼����Ҽ�ֵ�У���ͨ�����Ƚ��γɵģ��Ǹ����������ɫ�����������۵Ľ����������Ҫ��ÿһ�����������Ļ�����Ҫ��
                  ����߶���ȥ׷��ͳ���һ �����õ�������󣬴Ӷ����õ���Ӧ��ỷ������ʵ�������㣬�����������������Ҫ�������س�ͻ��ʱ����������ͻ���֮������
                </p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;���������Ʒ�ʣ����������ģ����������ѧϰ�͹����������������ġ�Ҫ������ȷ�������ģ���Ҫ�������¼��㣺</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;һ��Ѱ�Ҹ��������֧�㣬���ڷ����Լ����ŵ��볤����</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;����Ҫ����ȷ�ķ��򣬶��ðѸ��˵���������Ϊ�����������һ���˹���׷����˱�����ҫ����ʣ��ͱ���������ġ�</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;����ѧ����ȷ�����Ƚϡ����Ƚ���Ҫ�����ַ�ʽ��һ��������Լ�ǿ��õ��˱Ƚϣ���һ������������������˱Ƚϡ�����ѧ����Ϊ��
                  ������ıȽ�Ŀ�������Լ�������Ժ����Լ����ˡ�</p>
              </blockquote>
            </blockquote>
            </div>
<?		
			break;	
		case "2":
			echo "�Ʒַ�����";
			echo "��������Ŀ�÷ּ��������ַܷ�Χ��6�ֵ�30��֮�䣬����Խ�߱���״̬Խ�";echo "<br>";echo "<br>";?>
			<table width="405" border="1" bordercolor="#00FF00" bgcolor="#FFFFFF">
			<caption>
			<font color="#0000FF" size="3">��������ˮƽ��</font>
			</caption>
			  <tr>
				<th width="64" bgcolor="#FFFF00" scope="col"><p>14-16��</p>
				  <p>����</p></th>
				<th width="63" bgcolor="#FFFF00" scope="col"><p>17-21��</p>
				  <p>����</p></th>
				<th width="62" bgcolor="#FFFF00" scope="col"><p>22-30��</p>
				  <p>����</p></th>
				<th width="64" bgcolor="#FFFF00" scope="col"><p>30������</p>
				  <p>����</p></th>
				<th width="118" bgcolor="#FFFF00" scope="col">����ˮƽ</th>
			  </tr>
			  <tr>
				<td>0-8</td>
				<td>0-20</td>
				<td>0-12</td>
				<td>0-15</td>
				<td>�ǳ�ǿ</td>
			  </tr>
			  <tr>
				<td>9-17</td>
				<td>21-36</td>
				<td>13-25</td>
				<td>16-29</td>
				<td>ǿ</td>
			  </tr>
			  <tr>
				<td>18-33</td>
				<td>37-44</td>
				<td>26-40</td>
				<td>30-46</td>
				<td>��ƫǿ</td>
			  </tr>
			  <tr>
				<td>34-54</td>
				<td>45-69</td>
				<td>14-59</td>
				<td>47-66</td>
				<td>��ƫ��</td>
			  </tr>
			  <tr>
				<td>55-128</td>
				<td>70-128</td>
				<td>60-128</td>
				<td>67-128</td>
				<td>��</td>
			  </tr>
			</table>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;��ƪС��ʿ��</font></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ǳ�ǿ������������������⡣�㳣�����Ժܺõ�ӡ����Ȳ����ɣ�Ҳ���Ա���</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ǿ������ͬ������˱Ƚϣ��������ˮƽ�����õġ��㳣���������²����ӡ������������ɻ��Ա���</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ƫǿ���������ˮƽ�ڳ�̬��Χ֮�ڣ���������ǿ�ķ�չ���ơ�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ƫ�����������ˮƽ�ڳ�̬��Χ֮�ڣ������м����ķ�չ���ơ��������ɵ����򣬳����Ļ���������²��õ�ӡ��</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����������˵���������Ǹ����ص����⡣����������������������ʲôӡ����ϣ���ܸ����š��������Ĵ��������е����⡣</p>
			</div>
			<?
			break;
		case "3";
			echo "�Ʒַ�����";
			echo "�ֱ�������ش𡰷񡱡�����֪�����ĸ�����ÿ�����񡱼�2�֣�ÿ������֪������1�֣����ǡ����Ʒ֣��ܷ־���������˵ķ����������ֺܷ�������䣬�鿴�±��Ϳ���֪����Ľ���ˮƽ�ˡ�";echo "<br>";echo "<br>";?>
			<table width="455" border="1" bordercolor="#00FF00">
              <caption>
              <font color="#0000FF" size="3"> ��������ˮƽ��</font>
              </caption>
			  <tr>
                <th width="79" height="52" bgcolor="#FFFF00" scope="col"><p>14-16��</p>
                <p>����</p></th>
			    <th width="80" bgcolor="#FFFF00" scope="col"><p>17-21��</p>
		        <p>����</p></th>
			    <th width="79" bgcolor="#FFFF00" scope="col"><p>22-30��</p>
		        <p>����</p></th>
			    <th width="80" bgcolor="#FFFF00" scope="col"><p>30������</p>
		        <p>����</p></th>
			    <th width="103" bgcolor="#FFFF00" scope="col">����ˮƽ</th>
		      </tr>
              <tr>
                <td height="33">42-48</td>
                <td> 40-48</td>
                <td>40-48</td>
                <td>42-48</td>
                <td>�ǳ�ǿ</td>
              </tr>
              <tr>
                <td height="35">40-41</td>
                <td> 34-39</td>
                <td>33-39</td>
                <td>38-41</td>
                <td>ǿ</td>
              </tr>
              <tr>
                <td height="30">34-39</td>
                <td>31-33</td>
                <td> 29-32 </td>
                <td>33-37</td>
                <td>��ƫǿ</td>
              </tr>
              <tr>
                <td height="33">25-33</td>
                <td>23-30</td>
                <td>22-28</td>
                <td>28-32</td>
                <td>��ƫ��</td>
              </tr>
              <tr>
                <td height="34">0-24</td>
                <td> 0-22</td>
                <td>0-21</td>
                <td>0-27</td>
                <td>��</td>
              </tr>
            </table>
            <div align="left">
			<p>&nbsp;</p>
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;��ƪС��ʿ��</font></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ǳ�ǿ�����̬�ȷǳ���������ð�κη��ա������ǻᰲȻ���ġ��������̬�ȣ����˼ʹ�ϵ�У��������غͶ��ɡ�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ǿ������������飬���������Ҫ�����öࡣ�����Ǿ�������Σ�գ�����ȫ�����˼ʹ�ϵ�У����Եý��������ء�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ƫǿ����Ľ���ˮƽ�ڳ�̬��Χ֮�ڣ���������ǿ�ķ�չ���ơ���һ�㲻��³ç���¡�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ƫ������Ľ���ˮƽ�ڳ�̬��Χ֮�ڣ������м����ķ�չ���ơ�����ð�յ�������ʱ����çײ�ı��֡�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;������������㣬³ç���ࡣ�����ð�գ�����Σ������������������ǵ�̬��Ҳ���кô��������ദ��ͣ����ֹ۵ش��������е�
			���⡣���ǻ���Ȱ���㣺������˼������óȻ�ж����⵱Ȼ��������ȥ��ų��</p>
            </div>
		<?	
			break;
		case "4";
			echo "�Ʒַ�����";
			echo "��������18��ַܷ�Χ��14��124֮�䡣�÷�Խ�ߣ��Ҹ���Խ�ߡ�";echo "<br>";echo "<br>";?>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;��ƪС��ʿ��</font></p>
			
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ѧ�ϰ��Ҹ����ֳ��������Ҹ��У����SWB����������ָ���Ƕ������������������������ۡ���������˵�����������Ƿ��Ҹ��Ĳ�����
			ʵ�ʷ�����ʲô���ؼ������Ƕ��������������������ֽ��ͣ�����Ҹ�����һ�����۵ĸ������Ҫ���������ֹ��ɣ����ƽ�����������ȡ�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�о�������Ӱ�����Ҹ��������кܶ࣬�����Ŵ����أ��������ʣ�����ͥ����ỷ��������ѧϰ���������ر��Ƕ��������������ˣ����˸�
			���ء��Ա������Լ����֧������ȡ�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��������Ҹ��е�;�����Դ������������濼�ǣ����ڲ����ؽ����Ҹ��еĸ��ܺ�����ȡ�����˵��������ʣ�ȡ�����˵ľ��磬Ҫ���Ϸḻ�Լ�
			�����ģ����ⲿ���ؽ����Ҹ��еĲ������������ڽ���У��������ڡ��ɳ��������С���Ƹ����ɳ������˹��ɳ�������ҵ���ɳ���</p>
            </div>
			
		<?
			break;
		case "5";
			echo "�Ʒַ��������ͣ�";
			echo "��20����Ŀ�÷ּ������ֱ�õ����������ָ���÷֣��÷�Խ�����������Խ�ߡ�";echo "<br>";echo "<br>";?>
            <div align="left">
			<p><font color="#0000FF" size="5">&nbsp;&nbsp;��ƪС��ʿ��</font></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����ѧ�ϰ��Ҹ����ֳ��������Ҹ��У����SWB����������ָ���Ƕ������������������������ۡ���������˵�����������Ƿ��Ҹ��Ĳ�����
			ʵ�ʷ�����ʲô���ؼ������Ƕ��������������������ֽ��ͣ�����Ҹ�����һ�����۵ĸ������Ҫ���������ֹ��ɣ����ƽ�����������ȡ�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�о�������Ӱ�����Ҹ��������кܶ࣬�����Ŵ����أ��������ʣ�����ͥ����ỷ��������ѧϰ���������ر��Ƕ��������������ˣ����˸�
			���ء��Ա������Լ����֧������ȡ�</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��������Ҹ��е�;�����Դ������������濼�ǣ����ڲ����ؽ����Ҹ��еĸ��ܺ�����ȡ�����˵��������ʣ�ȡ�����˵ľ��磬Ҫ���Ϸḻ�Լ�
			�����ģ����ⲿ���ؽ����Ҹ��еĲ������������ڽ���У��������ڡ��ɳ��������С���Ƹ����ɳ������˹��ɳ�������ҵ���ɳ���</p>
            </div>
			
		<?
			break;
		}
	?>
		
		
				 
				 
		<br>
		<br>
		<br>
		<a href="index.php">������ҳ</a>
	
	</div>
	</body>
</html>
