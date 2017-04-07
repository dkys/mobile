<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<?php if ($this->_var['auto_redirect']): ?>
<meta http-equiv="refresh" content="3;URL=<?php echo $this->_var['message']['href']; ?>" />
<?php endif; ?>

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>css/bootstrap.min.css"  type="text/css">
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_var['ecs_css_root']; ?>style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>font-awesome/css/font-awesome.min.css"  type="text/css">
<link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>fonts/font-slider.css" type="text/css">

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
 <nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<select class="language">
						<option value="English" selected>English</option>
						<option value="France">France</option>
						<option value="Germany">Germany</option>
					</select>
					<select class="currency">
						<option value="USD" selected>USD</option>
						<option value="EUR">EUR</option>
						<option value="DDD">DDD</option>
					</select>
				</div>
				
                                    <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
			</div>
		</div>
	</nav>
    <header class="container">
		<div class="row">
			<div class="col-md-4">
                            <a href="index.php"><div id="logo"><img src="<?php echo $this->_var['ecs_css_root']; ?>images/logo.png" /></div></a>
			</div>
			<div class="col-md-4">
                            
				<form class="form-search" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">  
					<input type="text" class="input-medium search-query" name="keywords" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>">  
					<button name="imageField" type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>  
				</form>
			</div>
			<div class="col-md-4">
				<div id="cart"><a class="btn btn-1" href="flow.php"><span class="glyphicon glyphicon-shopping-cart"></span>购物车 : <?php 
$k = array (
  'name' => 'cart_nums',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 条</a></div>
			</div>
		</div>
	</header>
	
    <nav id="menu" class="navbar" style="margin-bottom: 8px;">
		<div class="container">
			<div class="navbar-header"><span id="heading" class="visible-xs">Categories</span>
			  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
<li style="width:100%;">
<a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>  style="float:left;"><?php echo $this->_var['lang']['home']; ?><span></span></a>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
  <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?> style="float:left;"><?php echo $this->_var['nav']['name']; ?><span></span></a>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></li>
			</div>
		</div>
	</nav>


<div id="page-content" class="single-page" style="margin: 0px;">
            <div class="container" style="margin-bottom: 0px;">
                <div class="row" style="width: 990px;margin: 0 auto;">
                    <div class="col-lg-12">
                        <ul class="breadcrumb" style="margin-bottom: 0px;margin-top: 0px;">
                            <li><a href="index.php">首页</a></li>
                            <li><a href="category.html">分类</a></li>
                            <li><a href="#">商品名称</a></li>
                        </ul>
                    </div>
                </div>

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="AreaL">
    
    <?php echo $this->fetch('library/cart.lbi'); ?>
    <?php echo $this->fetch('library/category_tree.lbi'); ?>
    <?php echo $this->fetch('library/goods_related.lbi'); ?>
    <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
    <?php echo $this->fetch('library/goods_article.lbi'); ?>
    <?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
    
    
    
    
    <?php echo $this->fetch('library/history.lbi'); ?>
  </div>
  
  
  <div class="AreaR">
  <?php echo $this->fetch('library/message_list.lbi'); ?>
  <?php echo $this->fetch('library/pages.lbi'); ?>
  <div class="blank5"></div>
    <div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['post_message']; ?></span></h3>
      <div class="boxCenterList">
          <form action="message.php" method="post" name="formMsg" onSubmit="return submitMsgBoard(this)">
            <table width="100%" border="0" cellpadding="3">
              <tr>
                <td align="right"><?php echo $this->_var['lang']['username']; ?></td>
                <td>
                <?php if ($_SESSION['user_name']): ?>
                <font class="f4_b"><?php echo $this->_var['username']; ?></font><label for="anonymous" style="margin-left:8px;"><input type="checkbox" name="anonymous" value="1" id="anonymous" /><?php echo $this->_var['lang']['message_anonymous']; ?></label>
                <?php else: ?>
               <?php echo $this->_var['lang']['anonymous']; ?>
                <?php endif; ?>
                </td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
                <td><input name="user_email" type="text" class="inputBg" size="20" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" /></td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['message_board_type']; ?></td>
                <td><input name="msg_type" type="radio" value="0" checked="checked" />
                  <?php echo $this->_var['lang']['message_type']['0']; ?>
                  <input type="radio" name="msg_type" value="1" />
                  <?php echo $this->_var['lang']['message_type']['1']; ?>
                  <input type="radio" name="msg_type" value="2" />
                  <?php echo $this->_var['lang']['message_type']['2']; ?>
                  <input type="radio" name="msg_type" value="3" />
                  <?php echo $this->_var['lang']['message_type']['3']; ?>
                  <input type="radio" name="msg_type" value="4" />
                  <?php echo $this->_var['lang']['message_type']['4']; ?> </td>
              </tr>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['message_title']; ?></td>
                <td><input name="msg_title" type="text" class="inputBg" size="30" /></td>
              </tr>
            <?php if ($this->_var['enabled_mes_captcha']): ?>
              <tr>
                <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
                <td><input type="text" size="8" name="captcha"  class="inputBg" />
                <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?'+Math.random()" /> </td>
              </tr>
            <?php endif; ?>
              <tr>
                <td align="right" valign="top"><?php echo $this->_var['lang']['message_content']; ?></td>
                <td><textarea name="msg_content" cols="50" rows="4" wrap="virtual" style="border:1px solid #ccc;"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input type="hidden" name="act" value="act_add_message" />
                  <input type="submit" value="<?php echo $this->_var['lang']['post_message']; ?>" class="bnt_blue_1" />
                </td>
              </tr>
            </table>
          </form>
        <script type="text/javascript">
        <?php $_from = $this->_var['lang']['message_board_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        /**
         * 提交留言信息
        */
        function submitMsgBoard(frm)
        {
            var msg = new Object;

             msg.user_email  = frm.elements['user_email'].value;
             msg.msg_title   = frm.elements['msg_title'].value;
             msg.msg_content = frm.elements['msg_content'].value;
             msg.captcha     = frm.elements['captcha'] ? frm.elements['captcha'].value : '';

            var msg_err = '';

            if (msg.user_email.length > 0)
            {
               if (!(Utils.isEmail(msg.user_email)))
               {
                  msg_err += msg_error_email + '\n';
                }
             }
             else
             {
                  msg_err += msg_empty_email + '\n';
             }
            if (msg.msg_title.length == 0)
            {
                msg_err += msg_title_empty + '\n';
            }
            if (frm.elements['captcha'] && msg.captcha.length==0)
            {
                msg_err += msg_captcha_empty + '\n'
            }
            if (msg.msg_content.length == 0)
            {
                msg_err += msg_content_empty + '\n'
            }
            if (msg.msg_title.length > 200)
            {
                msg_err += msg_title_limit + '\n';
            }

            if (msg_err.length > 0)
            {
                alert(msg_err);
                return false;
            }
            else
            {
                return true;
            }
        }
        
        </script>
      </div>
     </div>
    </div>
  </div>
  
</div>
<div class="blank5"></div>

<div class="block">
  <div class="box">
   <div class="helpTitBg clearfix">
    <?php echo $this->fetch('library/help.lbi'); ?>
   </div>
  </div>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
