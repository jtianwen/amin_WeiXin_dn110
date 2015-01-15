<!DOCTYPE html>
<html>
<head>
	<title>管理员登录</title>
	<meta charset="utf-8">
	<script language=JavaScript>
	function InputCheck(infoForm)
	{
	  if (infoForm.name.value == "")
	  {
	    alert("请输入姓名");
	    infoForm.name.focus();
	    return (false);
	  }
	  if (infoForm.password.value == "")
	  {
	    alert("请输入密码");
	    infoForm.password.focus();
	    return (false);
	  }
	}
	</script>
	<style>
	h1.title { 
		color: MidnightBlue;
		font:  700 50px "STXihei";
		text-align: center;
	}
	div.form{
		 text-align: center;
		 font:  700 20px "STXihei";
		 margin : 30px 250px 0px 250px;
	}
	div.row{
		 padding: 10px;
	}
	input{
		font: 20px "STXihei";
	}
	a, button{
		margin : 10px 30px 0px 30px;
		font: 700 20px "STXihei";
	}
	</style>
</head>

<body>
	<h1 class="title">管理员登录</h1>
	<div class="form">
		<form name="infoForm" action="adminHome.php" method="post" onSubmit="return InputCheck(this)">
			<div class="row">
				<fieldset>
					<legend>登录</legend>
					<div class="row">
						姓名：<input name="name" type="text" />
					</div>
					<div class="row">
						密码：<input name="password" type="password" />
					</div>
				</fieldset>
			</div>
			<div class="row">
				<button type="submit">登录</button>
				<a href="index.html">返回主页</a>
			</div>
		</form>
	</div>
</body>
</html>