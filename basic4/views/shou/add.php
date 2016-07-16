<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
<!--    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/css/common.css"/>-->
<!--    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/css/main.css"/>-->
<!--    <script type="text/javascript" src="__PUBLIC__/Admin/js/libs/modernizr.min.js"></script>-->
</head>
<body>

<div class="container clearfix">
    <include file="Public:left" />
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <a href="/jscss/admin/design/">首页</a>
                <span class="crumb-step">&gt;</span>
                <a class="crumb-name" href="/jscss/admin/design/">作品管理</a>
                <span class="crumb-step">&gt;</span
                ><span>新增公众号</span>
            </div>
        </div>

        <div class="result-wrap">
            <div class="result-content">
                <form action="index.php?r=shou/insert" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>公众号名称：</th>
                            <td>
                                <input class="common-text required" id="title" name="aname" size="50" value="" type="text" placeholder="请输入公众号名称">
                            </td>
                        </tr>
                        <tr>
                            <th>Appid：</th>
                            <td><input class="common-text" name="appid" size="50" placeholder="请输入Appid" type="text"></td>
                        </tr>
                        <tr>
                            <th>Appsecret：</th>
                            <td><input class="common-text" name="appsecret" size="50" placeholder="请输入appsecret" type="text"></td>
                        </tr>
                        <tr>
                            <th>内容：</th>
                            <td><textarea name="account" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                <a href="index.php?r=index/index"><input class="btn btn6"value="返回" type="button"></a>
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>