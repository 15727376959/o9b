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
        <form name="myform" id="myform" method="post">
            <div class="result-title">
                <div class="result-list">
                    <a id="batchDel" href="index.php?r=ip/add">
                        <i class="icon-font"></i>新增IP</a>
                    </a>
                    <a id="updateOrd" href="index.php?r=ip/trash">
                        <i class="icon-font"></i>回收站
                    </a>
                </div>
            </div>

            <div class="result-content">
                <table class="result-tab" width="100%">
                    <tbody>
                    <tr>
                        <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                        <th>ID</th>
                        <th>IP</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    <?php foreach($arr as $val) { ?>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td><?php echo $val['id'] ?></td>
                            <td title="">
                                <a target="_blank" href="#"><?php echo $val['ip'] ?></a>
                            </td>
                            <?php if($val['zhangtai']==0){ ?>
                                <td><a href="index.php?r=ip/zhuangtai&id=<?php echo $val['id']?>&sta=0">正常</a></td>
                           <?php }else{ ?>
                                <td><a href="index.php?r=ip/zhuangtai&id=<?php echo $val['id']?>&sta=1" style="color: red">限制</a></td>
                           <?php }?>
                            <td>
                                <a class="link-update" href="index.php?r=ip/update&id=<?php echo $val['id']?>">修改</a>
                                <a class="link-del" href="index.php?r=ip/del&id=<?php echo $val['id']?>">删除</a>
                            </td>
                        </tr>
                        <?php } ?>
                    <tr>
                    </tbody>
                </table>
                <div style="padding-left: 500px">
                    <?= LinkPager::widget(['pagination' => $pagination]) ?>
                </div>
            </div>

        </form>
    </div>

</div>
</div>




