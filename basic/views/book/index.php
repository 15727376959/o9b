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
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="/jscss/admin/design/">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-content">
            <form action="index.php?r=book/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden" name='_csrf' value="<?=yii::$app->request->csrfToken?>">
                <table class="insert-tab" width="100%">
                    <tbody>
                    <tr>
                        <th><i class="require-red">*</i>书名：</th>
                        <td>
                            <input class="common-text required" id="name" name="name" size="50" value="" type="text"  onblur="only()" placeholder="请输入书名">
                        </td>
                    </tr>
                    <tr>
                        <th>作者：</th>
                        <td><input class="common-text" name="author" size="50" placeholder="请输入作者" type="text"></td>
                    </tr>
                    <tr>
                        <th>分类：</th>
                        <td>
                            <select name="t_id" id="">
                                <?php foreach($arr as $v) { ?>
                                <option value="<?php echo $v['t_id']?>"><?php echo $v['t_name']?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>价格：</th>
                        <td><input class="common-text" name="price" size="50" placeholder="请输入价格" type="text"></td>
                    </tr>
                    <tr>
                        <th>封面：</th>
                        <td><input class="common-text" name="filename" size="50" placeholder="请输入封面" type="file"></td>
                    </tr>
                    <tr>
                        <th>描述 ：</th>
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
<script>
    function only(){
        var name=$('#name').val();
      //alert(name);
        $.ajax({
            url:"index.php?r=book/only",
            type:"POST",
            data:{name:name},
            success:function(msg){
                if(msg==1){
                    alert('书名已存在');
                }
            }
        })
    }
</script>
</body>
</html>