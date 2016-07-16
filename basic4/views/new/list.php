<?php
use yii\widgets\LinkPager;
?>
<div class="container clearfix">
<div class="main-wrap">

    <div class="crumb-wrap">
        <div class="crumb-list">
            <i class="icon-font"></i>
            <a href="file:///jscss/admin">首页</a>
            <span class="crumb-step">&gt;</span>
            <span class="crumb-name">作品管理</span>
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
            <div class="result-title">
                <div class="result-list">
                    <a id="batchDel" href="index.php?r=new/add">
                        <i class="icon-font"></i>新增新闻
                    </a>
                    <?= LinkPager::widget(['pagination' => $pagination]) ?>
                </div>
            </div>

            <div class="result-content">
                <?php foreach($arr as $k=>$v){ ?>
                    <dl style="float:left;padding-left: 100px;padding-top: 50px" class="a">
                        <dt><img src="<?php echo $v['book_photo']?>" alt="" width="300" height="200"/></dt>
                        <dd><font>名称：</font><?php echo $v['book_name']?></dd>
                        <dd><font>作者：</font><?php echo $v['book_author']?></dd>
                        <dd><font>价格：</font><?php echo $v['book_price']?></dd>
                        <h2><a href="javascript:viod(0)">删除</a></h2>
                    </dl>
                <?php }?>
            </div>
    </div>
</div>

</div>










