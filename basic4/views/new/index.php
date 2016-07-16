<!doctype html>
<html>
<body>
<div class="container clearfix">
    <include file="Public:left" />
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <a href="/jscss/admin/design/">首页</a>
                <span class="crumb-step">&gt;</span>
                <a class="crumb-name" href="/jscss/admin/design/">新闻管理</a>
                <span class="crumb-step">&gt;</span
                ><span>添加新闻</span>
            </div>
        </div>

        <div class="result-wrap">
            <div class="result-content">
                <form action="index.php?r=new/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th><i class="require-red">*</i>新闻名称：</th>
                            <td>
                                <input class="common-text required" id="title" name="book_name" size="50" value="" type="text" placeholder="请输入新闻">
                                <span style="color: red"><?php if(!empty($error)){echo $error['book_name'][0]; }?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>作者：</th>
                            <td><input class="common-text" name="book_author" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>分类：</th>
                            <td>
                               <select name="t_id">
                                   <?php foreach($list as $k=>$v){ ?>
                                   <option value="<?php echo $v['type_id']?>"><?php echo $v['type_name']?></option>
                                   <?php }?>
                               </select>
                            </td>
                        </tr>
                        <tr>
                            <th>价格：</th>
                            <td><input class="common-text" name="book_price" size="50" type="text"></td>
                        </tr>
                        <tr>
                            <th>图片：</th>
                            <td><input class="common-text" name="book_photo" size="50" type="file"></td>
                        </tr>
                        <tr>
                            <th>内容：</th>
                            <td>
                                <textarea name="book_desc" class="common-textarea" cols="30" rows="10"></textarea>
                            </td>
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
</div>
</body>
</html>