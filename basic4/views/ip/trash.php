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
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a id="batchDel" href="index.php?r=ip/list">
                            <i class="icon-font"></i>IP列表</a>
                        </a>
<!--                        <a id="batchDel" href="javascript:void(0)">-->
<!--                            <i class="icon-font"></i>批量删除-->
<!--                        </a>-->
<!--                        <a id="updateOrd" href="javascript:void(0)">-->
<!--                            <i class="icon-font"></i>更新排序-->
<!--                        </a>-->
                        <a id="updateOrd" href="index.php?r=ip/trash">
                            <i class="icon-font"></i>回收站
                        </a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tbody><tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>IP</th>
                            <th>操作</th>
                        </tr>
                        <?php
                        foreach($arr as $val) {
                            ?>
                            <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>

                                <td><?php echo $val['id'] ?></td>
                                <td title=""><a target="_blank" href="#"><?php echo $val['ip'] ?></a>
                                </td>
                                <td>
                                    <a class="link-update" href="index.php?r=ip/dell&id=<?php echo $val['id']?>">删除</a>
                                    <a class="link-del" href="index.php?r=ip/restore&id=<?php echo $val['id']?>">还原</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
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




