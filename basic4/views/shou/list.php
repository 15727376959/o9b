<?php
use yii\widgets\LinkPager;
?>
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery-zclip-master/jquery.zclip.js"></script>
<div class="container clearfix">
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>
                <a href="file:///jscss/admin">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">公众号管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="index.php?r=ip/list" method="post">
                    <table class="search-tab">
                        <tbody>
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="search" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" href="index.php?r=shou/add">
                            <i class="icon-font"></i>新增公众好</a>
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="result-content">
            <?php foreach($list as $k=>$v) { ?>
            <div class="result-wrap">
                <div class="result-title">
                    <div class="result-list" id="api">
                        <a id="batchDel" href="index.php?r=shou/add">API地址</a><br>
                        <input class="common-text" name="book_author" size="50" type="text" value="<?php echo $v['aurl']?>">
                        <button class="btn" type="button">复制</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)">删除</a>
                    </div>
                    <div class="result-list" id="token">
                        <a id="batchDel" href="index.php?r=shou/add">TOKEN</a><br>
                        <input class="common-text" name="book_author" size="50" type="text" value="<?php echo $v['atoken']?>">
                        <button class="btn" type="button">复制</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="javascript:void(0)">删除</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <script>
                $(function() {
                    $("#api button").zclip({
                        path:'assets/js/jquery-zclip-master/ZeroClipboard.swf',
                        copy:$('#api input').val()
                    });
                    $("#token button").zclip({
                        path:'assets/js/jquery-zclip-master/ZeroClipboard.swf',
                        copy:$('#token input').val()
                    });
                });
            </script>
        </div>
    </div>
</div>






