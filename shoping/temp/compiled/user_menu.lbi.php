<div class="userMenu">
    <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
        <li role="presentation" <?php if ($this->_var['action'] == 'default'): ?>class="active"<?php endif; ?>><a href="user.php"><img src="themes/cpts_467_tq/images/u1.gif"> <?php echo $this->_var['lang']['label_welcome']; ?></a></li>
        <li role="presentation" <?php if ($this->_var['action'] == 'profile'): ?>class="active"<?php endif; ?>><a href="user.php?act=profile"><img src="themes/cpts_467_tq/images/u2.gif"> <?php echo $this->_var['lang']['label_profile']; ?></a></li>
        <li <?php if ($this->_var['action'] == 'order_list' || $this->_var['action'] == 'order_detail'): ?>class="active"<?php endif; ?>><a href="user.php?act=order_list"><img src="themes/cpts_467_tq/images/u3.gif"> <?php echo $this->_var['lang']['label_order']; ?></a></li>
        <li <?php if ($this->_var['action'] == 'address_list'): ?>class="active"<?php endif; ?>><a href="user.php?act=address_list"><img src="themes/cpts_467_tq/images/u4.gif"> <?php echo $this->_var['lang']['label_address']; ?></a></li>
        <li role="presentation" <?php if ($this->_var['action'] == 'collection_list'): ?>class="active"<?php endif; ?>><a href="user.php?act=collection_list"><img src="themes/cpts_467_tq/images/u5.gif"> <?php echo $this->_var['lang']['label_collection']; ?></a></li>
        <li role="presentation" <?php if ($this->_var['action'] == 'message_list'): ?>class="active"<?php endif; ?>><a href="user.php?act=message_list"><img src="themes/cpts_467_tq/images/u6.gif"> <?php echo $this->_var['lang']['label_message']; ?></a></li>
        <li <?php if ($this->_var['action'] == 'tag_list'): ?>class="active"<?php endif; ?>><a href="user.php?act=tag_list"><img src="themes/cpts_467_tq/images/u7.gif"> <?php echo $this->_var['lang']['label_tag']; ?></a></li>
        <li <?php if ($this->_var['action'] == 'booking_list'): ?>class="active"<?php endif; ?>><a href="user.php?act=booking_list"><img src="themes/cpts_467_tq/images/u8.gif"> <?php echo $this->_var['lang']['label_booking']; ?></a></li>
        <li <?php if ($this->_var['action'] == 'bonus'): ?>class="active"<?php endif; ?>><a href="user.php?act=bonus"><img src="themes/cpts_467_tq/images/u9.gif"> <?php echo $this->_var['lang']['label_bonus']; ?></a></li>
        <?php if ($this->_var['affiliate']['on'] == 1): ?><li <?php if ($this->_var['action'] == 'affiliate'): ?>class="active"<?php endif; ?>><a href="user.php?act=affiliate"><img src="themes/cpts_467_tq/images/u10.gif"> <?php echo $this->_var['lang']['label_affiliate']; ?></a></li><?php endif; ?>
        <li <?php if ($this->_var['action'] == 'comment_list'): ?>class="active"<?php endif; ?>><a href="user.php?act=comment_list"><img src="themes/cpts_467_tq/images/u11.gif"> <?php echo $this->_var['lang']['label_comment']; ?></a></li>
        <!--<a href="user.php?act=group_buy"><?php echo $this->_var['lang']['label_group_buy']; ?></a>-->
        <li <?php if ($this->_var['action'] == 'track_packages'): ?>class="active"<?php endif; ?>><a href="user.php?act=track_packages"><img src="themes/cpts_467_tq/images/u12.gif"> <?php echo $this->_var['lang']['label_track_packages']; ?></a></li>
        <li <?php if ($this->_var['action'] == 'account_log'): ?>class="active"<?php endif; ?>><a href="user.php?act=account_log"><img src="themes/cpts_467_tq/images/u13.gif"> <?php echo $this->_var['lang']['label_user_surplus']; ?></a></li>
        <?php if ($this->_var['show_transform_points']): ?>
        <li <?php if ($this->_var['action'] == 'transform_points'): ?>class="active"<?php endif; ?>><a href="user.php?act=transform_points"><img src="themes/cpts_467_tq/images/u14.gif"> <?php echo $this->_var['lang']['label_transform_points']; ?></a></li>
        <?php endif; ?>
        <li><a href="user.php?act=logout" style="background:none; text-align:right; margin-right:10px;"><img src="themes/cpts_467_tq/images/bnt_sign.gif"></a></li>
    </ul>
</div>