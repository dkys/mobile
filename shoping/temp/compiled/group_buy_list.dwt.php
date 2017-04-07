<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
<meta name="Generator" content="ECSHOP v2.7.3" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
        <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
        
        <title><?php echo $this->_var['page_title']; ?></title>
        
        
        
        <!--<link rel="shortcut icon" href="favicon.ico" />-->
        <link rel="icon" href="animated_favicon.gif" type="image/gif" />
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>css/bootstrap.min.css"  type="text/css">
        <link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo $this->_var['ecs_css_root']; ?>style1.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>font-awesome/css/font-awesome.min.css"  type="text/css">
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>fonts/font-slider.css" type="text/css">

                    
                    <script src="<?php echo $this->_var['ecs_css_root']; ?>js/jquery-2.1.1.js"></script>

                      	 
                    <script src="<?php echo $this->_var['ecs_css_root']; ?>js/bootstrap.min.js"></script>
                    
                    <?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
                    </style>
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
                        
                        <nav id="menu" class="navbar" style="margin: 8px;">
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
                                        
                                        
                                        <div class="blank5"></div>
                                        <div class="box">
                                            <div class="box_1">
                                                <h3><span><?php echo $this->_var['lang']['gb_goods_name']; ?></span></h3>
                                                <div class="boxCenterList">
                                                    <?php if ($this->_var['gb_list']): ?>
                                                    <?php $_from = $this->_var['gb_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group_buy');if (count($_from)):
    foreach ($_from AS $this->_var['group_buy']):
?>
                                                    <ul class="group clearfix">
                                                        <li style="margin-right:8px; text-align:center;">
                                                            <a href="<?php echo $this->_var['group_buy']['url']; ?>"><img src="<?php echo $this->_var['group_buy']['goods_thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?>" style="vertical-align: middle" /></a>
                                                        </li>
                                                        <li style="width:555px; line-height:23px;">
                                                            <?php echo $this->_var['lang']['gb_goods_name']; ?><a href="<?php echo $this->_var['group_buy']['url']; ?>" class="f5"><?php echo htmlspecialchars($this->_var['group_buy']['goods_name']); ?></a><br />
                                                            <?php echo $this->_var['lang']['act_time']; ?>：<?php echo $this->_var['group_buy']['formated_start_date']; ?> -- <?php echo $this->_var['group_buy']['formated_end_date']; ?><br />
                                                            <?php echo $this->_var['lang']['gb_price_ladder']; ?><br />
                                                            <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                                                                <tr>
                                                                    <th width="29%" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['gb_ladder_amount']; ?></th>
                                                                    <th width="71%" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['gb_ladder_price']; ?></th>
                                                                </tr>
                                                                <?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                                                                <tr>
                                                                    <td width="29%" bgcolor="#FFFFFF"><?php echo $this->_var['item']['amount']; ?></td>
                                                                    <td width="71%" bgcolor="#FFFFFF"><?php echo $this->_var['item']['formated_price']; ?></td>
                                                                </tr>
                                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                            </table>
                                                        </li>
                                                    </ul>
                                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                    <?php else: ?>
                                                    <span style="margin:2px 10px; font-size:14px; line-height:36px;"><?php echo $this->_var['lang']['group_goods_empty']; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="blank5"></div>
                                        <?php echo $this->fetch('library/pages.lbi'); ?>
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
                                <footer>
            <div class="container">
                <div class="wrap-footer">
                    <div class="row">
                        <div class="col-md-3 col-footer footer-1">
                            <img src="themes/cpts_467_tq/images/logofooter.png" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-footer footer-2">
                            <div class="heading"><h4>Customer Service</h4></div>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-footer footer-3">
                            <div class="heading"><h4>My Account</h4></div>
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Brands</a></li>
                                <li><a href="#">Gift Vouchers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-footer footer-4">
                            <div class="heading"><h4>Contact Us</h4></div>
                            <ul>
                                <li><span class="glyphicon glyphicon-home"></span>California, United States 3000009</li>
                                <li><span class="glyphicon glyphicon-earphone"></span>+91 8866888111</li>
                                <li><span class="glyphicon glyphicon-envelope"></span>infor@yoursite.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
                        </div>
                        <div class="col-md-6">
                            <div class="pull-right">
                                <ul>
                                    <li><img src="themes/cpts_467_tq/images/visa-curved-32px.png" /></li>
                                    <li><img src="themes/cpts_467_tq/images/paypal-curved-32px.png" /></li>
                                    <li><img src="themes/cpts_467_tq/images/discover-curved-32px.png" /></li>
                                    <li><img src="themes/cpts_467_tq/images/maestro-curved-32px.png" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
                                </body>
                                </html>
