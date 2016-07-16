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
                <a class="crumb-name" href="/jscss/admin/design/">IP管理</a>
                <span class="crumb-step">&gt;</span
                ><span>修改IP</span>
            </div>
        </div>

        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th>IP地址：</th>
                            <td>
                                <input class="common-text" name="ip" size="50"  value="<?=$result->ip?>" placeholder="请输入Ip地址" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>是否开放：</th>
                            <td>
                                <input type="radio" name="zhangtai" value="0">开放
                                <input type="radio" name="zhangtai" value="1">限制
                            </td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="id" value="<?=$result->id?>"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="提交" type="button" onclick="sss()">
                                <a href="index.php?r=ip/list"><input class="btn btn6"value="返回" type="button"></a>
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
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    function sss(){
        var zhangtai=$("input[type='radio']:checked").val();
        var id=$("input[type='hidden']").val();
        var ip=$("input[type='text']").val();
        if(zhangtai==0 || zhangtai==1){
            $.post('index.php?r=ip/update1',{zhangtai:zhangtai,id:id,ip:ip},function(msg){
//                console.log(msg);
                if(msg==1){
                    alert("修改成功")
                }
            })
        }else{
            alert('请选择状态');
        }
    }
</script>

</html>