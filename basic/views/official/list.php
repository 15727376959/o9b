<?php
use yii\widgets\LinkPager;
?>
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
            <form  action="index.php?r=official/search"   method="get">
                <table class="search-tab">
                    <tr>
                        <th width="70">标题:</th>
                        <td><input class="common-text" placeholder="关键字" name="user" value="" id="user" type="text"></td>
                        <td><input type="submit" value="搜索"></td>
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
                        <th>公众号名称</th>
                        <th>Appid</th>
                        <th>Appsecret</th>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach($arr as $k=>$v){?>
                        <tr>
                            <td><?php echo $v['aname']?></td>
                            <td><?php echo $v['appid']?></td>
                            <td><?php echo $v['appsecret']?></td>
                            <td><?php echo $v['content']?></td>
                            <td>
                                <a href="index.php?r=official/dele&id=<?php echo $v['id']?>">删除</a>|
                                <a href="index.php?r=official/update&id=<?php echo $v['id']?>">修改</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
                <div class="list-page">
                    <?php echo LinkPager::widget([
             'pagination' => $pagination,
   ]);?>
                </div>
            </div>
        </form>
    </div>
</div>
<!--/main-->
</div>
<!--<script>-->
<!-- function but()-->
<!--    var user=$('#user').val();-->
<!--        $.ajax({-->
<!--        type:"post",-->
<!--          url:"index.php?r=ip/search",-->
<!--        data:{user:user},-->
<!--           success:function(msg){-->
<!--       alert(msg);-->
<!--           }-->
<!--      })-->
<!---->
<!--</script>-->
</body>
</html>