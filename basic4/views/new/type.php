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
                ><span>添加分类</span>
            </div>
        </div>

        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>分类名称：</th>
                            <td>
                                <input class="common-text required" id="title" name="type_name" size="50" type="text" placeholder="请输入分类名称">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="button" onclick="sss()" >
                                <a href="index.php?r=index/index">
                                    <input class="btn btn6"value="返回" type="button" >
                                </a>
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script>
 function sss(){
     var type_name=$("input[type='text']").val();
     if(type_name==''){
         alert("请填写分类名称");
     }else{
         $.post('index.php?r=new/type_add',{type_name:type_name},function(msg){
             if(msg==1){
                 alert("已有此分类")
             }else if(msg==2){
                 alert("分类添加成功")
             }else{
                 alert("分类添加失败")
             }
         })
     }
 }
</script>
</body>
</html>