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
        <input type="text" name="uname" id="name" class="username" placeholder="Username"><span id="notice"></span>
        <input type="password" name="upwd" id="pwd" class="password" placeholder="Password"><span id="notice1"></span>
        <button type="button" onclick="login();">登陆</button>
        <div class="error"><span>+</span></div>
        <br>
    </form>
</div>

<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/supersized.3.2.7.min.js"></script>
<script src="assets/js/supersized-init.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>

<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    //ajax登陆
    function login(){
        var uname=$("#name").val();
        var upwd=$("#pwd").val();
        $.get('index.php?r=login/check_login',{uname:uname,upwd:upwd},function(msg){
            console.log(msg)
            if(msg==1){
                location.href='index.php?r=shou/index';
            }else if(msg==2){
                $("#notice1").html("<font color='red'>密码不正确</font>");
            }else if(msg==4){
               alert('IP应经被限制');
            }else{
                $("#notice").html("<font color='red'>该用户不存在,请重新登录</font>");
            }
        })

    }
</script>
