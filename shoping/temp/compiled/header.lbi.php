
<div class="col-xs-6">
    <ul class="top-link">
        <?php if ($this->_var['user_info']): ?>
            <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>用户中心</a></li>
            <li><a href="user.php?act=logout"><span class="glyphicon glyphicon-envelope"></span> 退出</a></li>
        <?php else: ?>
            <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>登录</a></li>
            <li><a href="user.php?act=register"><span class="glyphicon glyphicon-envelope"></span> 注册</a></li>
        <?php endif; ?>
    </ul>
</div>