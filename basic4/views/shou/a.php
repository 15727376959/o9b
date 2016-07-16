<table class="result-tab" width="100%">
    <tbody>
    <tr>
        <th class="tc" width="5%">
            <input class="allChoose" name="" type="checkbox">
        </th>
        <th>ID</th>
        <th>微信号</th>
        <th>IP地址</th>
        <th>TOKEN</th>
        <td>所属用户</td>
        <th>操作</th>
    </tr>
    <?php foreach($list as $k=>$v) { ?>
        <tr>
            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
            <td><?php echo $v['aid'] ?></td>
            <td></td>
            <td><?php echo $v['aurl']?></td>
            <td><?php echo $v['atoken']?></td>
            <td><?php echo $v['login']['name']?></td>
            <td>
                <a href="javascript:void(0)" onclick="del(<?php echo $v['aid']?>)">删除</a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>