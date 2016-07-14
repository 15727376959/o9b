<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微信公众号平台</title>
    <link rel="stylesheet" type="text/css" href="public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/main.css"/>
    <script type="text/javascript" src="public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
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
                    <a href="#"><i class="icon-font">&#xe003;</i>公众号功能</a>
                    <ul class="sub-menu">
                        <li><a href="?r=official/index"><i class="icon-font">&#xe008;</i>添加公众号</a></li>
                        <li><a href="index.php?r=official/list"><i class="icon-font">&#xe005;</i>查看公众号</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>自定义回复</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>自定义回复</a>
                    <ul class="sub-menu">
                        <li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>图书管理</a>
                    <ul class="sub-menu">
                        <li><a href="?r=book/index"><i class="icon-font">&#xe017;</i>新增图书</a></li>
                        <li><a href="?r=book/list"><i class="icon-font">&#xe037;</i>图书展示</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <?=$content; ?>
</body>
</html>