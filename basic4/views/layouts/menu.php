<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>微E后台管理</title>
    <link rel="stylesheet" type="text/css" href="public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/main.css"/>
    <script type="text/javascript" src="public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">微E后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="">
                        <?php
                        $session = \Yii::$app->session;
                        $session->open();
                        echo $session->get("name");
                        ?>
                    </a></li>
                <li><a href="index.php?r=login/set_pwd">修改密码</a></li>
                <li><a href="index.php?r=login/login">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href=""></i>公众号管理</a>
                    <ul class="sub-menu">
                        <li><a href="index.php?r=shou/add"></i>添加公众号</a></li>
                        <li><a href="index.php?r=shou/list"></i>查看公众号</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""></i>IP管理</a>
                    <ul class="sub-menu">
                        <li><a href="index.php?r=ip/list"></i>查看IP</a></li>
                        <li><a href="index.php?r=ip/add"></i>新增IP</a></li>
                    </ul>
                </li>
                <li>
                    <a href=""></i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="index.php?r=new/add"></i>添加新闻</a></li>
                        <li><a href="index.php?r=new/type"></i>添加分类</a></li>
                        <li><a href="index.php?r=new/list"></i>查看新闻</a></li>
                    </ul>
                </li>
<!--                <li>-->
<!--                    <a href="#"></i>自定义回复</a>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href=""></i>文字回复</a></li>-->
<!--                        <li><a href="">添加规则</a></li>-->
<!--                        <li><a href="">图文回复</a></li>-->
<!--                        <li><a href="">机器人回复回复</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--				<li>-->
<!--                    <a href="#">菜单</a>-->
<!--                    <ul class="sub-menu">-->
<!--                        <li><a href="">自定义菜单</a></li>-->
<!--                        <li><a href="">图文回复</a></li>-->
<!--                        <li><a href="">机器人回复回复</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <?= $content ?>
</div>
</body>
</html>