<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="public/css/main.css"/>
    <script type="text/javascript" src="public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="index.php?r=official/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden" name='_csrf' value="<?=yii::$app->request->csrfToken?>">
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
                        <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                        </td>
                    </tr>
                    </tbody></table>
            </form>
        </div>
    </div>

</div>

</body>
</html>