<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/main.css"/>
    <script type="text/javascript" src="public/js/libs/modernizr.min.js"></script>
    <script src="js/juqery.js"></script>
</head>
<body>
<!--/sidebar-->
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">作品管理</span></div>
    </div>
    <div class="search-wrap">
        <div class="search-content">
            <form action="index.php?r=ip/search" method="post">
                <table class="search-tab">
                    <tr>
                        <th width="70">标题:</th>
                        <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                        <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="result-wrap">
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">

                </div>
            </div>
            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>登陆IP</th>
                        <th>状态</th>
                        <th>最近一次登陆时间</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach($arr as $k=>$v){?>
                        <tr>
                            <td><?php echo $v['id']?></td>
                            <td><a target="_blank" href="#"><?php echo $v['ip']?></a>
                            </td>
                            <td><font color="red">允许登陆</font></td>
                            <td><?php echo date('Y-m-d H:i:s',$v['time'])?></td>
                            <td>
                                <a class="link-update" href="?r=ip/forbid&id=<?php echo $v['id']?>">禁止</a>
                                <a class="link-del" href="?r=ip/del&id=<?php echo $v['id']?>">删除</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
                <div class="list-page"> 2 条 1/1 页</div>
            </div>
        </form>
    </div>
</div>
<!--/main-->
</div>
</body>
</html>