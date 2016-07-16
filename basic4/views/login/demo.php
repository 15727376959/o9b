<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>蓝色透明登录界面模板</title>

<link rel="stylesheet" href="assets/login/css/font-awesome.min.css"/>
<link rel="stylesheet" href="assets/login/css/loginMy.css"/>

<style>
html,body{width:auto;}
</style>

</head>
<body>

<div class="main">

	<div class="center">
		<form action="" id="formOne" method="post"onsubmit="return submitB()" >
			<i class="fa fa-user Cone">  | </i>
			<input type="text" name="uer" id="user" placeholder="用户名" value="<?php echo $uname?>"/>
			<span id="user_pass"></span>
			<br/>
			<i class="fa fa-key Cone">  | </i>
			<input type="password" name="pwd" id="pwd" placeholder="密码"/>
			<span id="pwd_pass"></span>
			<br/>
			<i class="fa fa-key Cone">  | </i>
			<input type="password" name="pwd1" id="pwd" placeholder="确认密码"/>
			<span id="pwd_pass"></span>
			<br/>
			<input type="submit" value="登录" id="submit" name="submit">
			<br/>
		</form>
	</div>
	
</div>


<script type="text/javascript" src="assets/login/js/loginMy.js"></script>
<div style="text-align:center;">
</div>
</body>
</html>