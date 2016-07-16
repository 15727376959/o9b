<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title> Wei W set_pwd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/supersized.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>Wei E 重置密码</h1>
    <form action="index.php?r=login/new_pwd" method="post">
        <input type="text" name="uname" id="uname" class="username" value="<?php echo $uname;?>" placeholder="<?php echo $uname;?>">
        <input type="password" name="old_pwd" id="upwd" class="password" placeholder="old Password">
        <input type="password" name="new_pwd" id="upwd" class="password" placeholder="new Password">
        <button type="submit" onclick="">确定</button>
        <div class="error"><span>+</span></div>
        <br>
        <div id="notice"></div>
    </form>
    <div class="connect">
        <!-- <p>第三方登陆</p>
         <p>
             <a class="facebook" href=""></a>
             <a class="twitter" href=""></a>
         </p>
         -->
    </div>
</div>
<!-- Javascript -->
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/supersized.3.2.7.min.js"></script>
<script src="assets/js/supersized-init.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>
