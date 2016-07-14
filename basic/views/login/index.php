<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Fullscreen Login</title>
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
    <h1>登录</h1>
    <form action="" method="post">
        <input type="text" name="user" id="user" class="username" placeholder="Username">
        <input type="password" name="pwd" id="pwd" class="password" placeholder="Password">
        <button type="button" onclick="login();">登陆</button>
        <div class="error"><span>+</span></div>
        <br>
        <div id="notice"></div>
    </form>
    <div class="connect">
<!--   <p>第三方登陆</p>-->
<!--         <p>-->
<!--             <a class="facebook" href=""></a>-->
<!--             <a class="twitter" href=""></a>-->
<!--         </p>-->

    </div>
</div>


<!-- Javascript -->
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/supersized.3.2.7.min.js"></script>
<script src="assets/js/supersized-init.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script>
    function login(){
        var user=$('#user').val();
        var pwd=$('#pwd').val();
        //alert(user);


        $.ajax({
            type:"post",
            url:"index.php?r=login/check",
            data:"user="+user+"&pwd="+pwd,
            success:function(msg){
               //alert(msg);
               if(msg==1){
                   alert('欢迎登录');
                   location.href="index.php?r=index/index";
               }else if(msg==2){
                   alert('ip被禁止访问本网站');
               }else if(msg==3){
                   alert('密码错误');
               }else{
                   alert('您输入的用户名不存在');
               }
            }

        })

    }






</script>
