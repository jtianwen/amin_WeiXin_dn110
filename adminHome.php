<!DOCTYPE html>
<html>
<head>
	<title>哈工大电脑110俱乐部-后台管理系统</title>
	<meta charset="utf-8">
	<?php
		require_once("admin.class.php");
		require_once("control.class.php");
		require_once("db.class.php");
		$valid = false;
		if(!empty($_POST)){
			$name = $_POST['name'];
			$password = $_POST['password'];
			$admin = new admin($name, $password);
			if(!Control::check_admin($admin))
			{
				echo "<h1>用户名或密码错误</h1>";
				exit;
			}
		}
	?>
	<style>
		h1{
			color: MidnightBlue;
			font:  700 50px "STXihei";
			text-align: center;
			margin : 0px 0px 30px 0px;
		}
		a.menu{
			font:  30px "STXihei";
			padding: 10px;
		}
		a.menu2{
			color: DarkSlateGray;
			font:  20px "STXihei";
			padding: 10px;
		}
		div.menu,div.menu2{
			text-align: center;
			padding: 10px;
		}
        div.t{
            text-align: center;
        	color: Blue;
			font: 700 20px "STXihei";
			padding: 10px;
        }
        table{
            margin:auto; 
            width:80%;
        }
    </style>
</head>

<body>
	<h1>微信平台义诊预约名单</h1>
	<?php
		$db = new DB();
		$tableData = $db->getAllData('orders');
		echo '<div class="t">';
		echo '<table border="1">';
		echo '<tr><th>序号</th><th>姓名</th><th>电话号码</th><th>义诊内容</th></tr>';
		foreach ($tableData as $row) {
			echo '<tr>';
			echo '<td>'.$row->id.'</td>';
			echo '<td>'.$row->name.'</td>';
			echo '<td>'.$row->phone.'</td>';
			echo '<td>'.$row->problem.'</td>';
			echo '</tr>';
		}
		echo '</table>';
		echo '</div>';
	?>
	<div class="menu2">
		<a class="menu2" href="index.html">返回主页</a>
	</div>
</body>
</html>