<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
<meta name="Generator" content="ECSHOP v2.7.3" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="">
            <meta name="author" content="">

                <title>欢迎登录</title>

                
                <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>css/bootstrap.min.css"  type="text/css">

                    
                    <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>css/style.css">


                        
                        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>font-awesome/css/font-awesome.min.css"  type="text/css">
                            <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>fonts/font-slider.css" type="text/css">

                                
                                <script src="<?php echo $this->_var['ecs_css_root']; ?>js/jquery-2.1.1.js"></script>

                                  	 
                                <script src="<?php echo $this->_var['ecs_css_root']; ?>js/bootstrap.min.js"></script>
                                <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>

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
                                                <div id="logo"><img src="<?php echo $this->_var['ecs_css_root']; ?>images/logo.png" /></div>
                                            </div>
                                            <div class="col-md-4">
                            
				<form class="form-search" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">  
					<input type="text" class="input-medium search-query" name="keywords" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>">  
					<button name="imageField" type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>  
				</form>
			</div>
                                            <div class="col-md-4">
                                                <div id="cart"><a class="btn btn-1" href="<?php echo $this->_var['ecs_css_root']; ?>cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>购物车 :  <?php 
$k = array (
  'name' => 'cart_nums',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 条</a></div>
                                            </div>
                                        </div>
                                    </header>
                                    
                                    <nav id="menu" class="navbar">
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
                                    
                                    
                                    
                                    <div id="page-content" class="single-page">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <ul class="breadcrumb">
                                                        <li><a href="index.php">首页</a></li>
                                                        <li><a href="user.php">登录</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <?php if ($this->_var['action'] == 'login'): ?>
                                                <div class="col-md-6">
                                                    <div class="heading"><h2>登录</h2></div>
                                                    <form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="用户名 :" name="username" id="username" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <!--<input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="inputBg" style="width:179px;" />-->
                                                            <input type="password" class="form-control" placeholder="密码 :" name="password" id="email" required>
                                                        </div>

                                                        <label style="display: block;"><input name="agreement" type="checkbox" value="1" checked="checked" />请保存我这次的登录信息。</label>
                                                        <input type="hidden" name="act" value="act_login" />
                                                        <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                                        <button type="submit" class="btn btn-1" name="submit" id="login">登录</button>
                                                        <a href="#"> 忘记密码?</a>
                                                    </form>
                                                </div>
                                                <?php endif; ?>
                                                
                                                
                                                <?php if ($this->_var['action'] == 'register'): ?>
                                                <div class="col-md-6">
                                                    <div class="heading"><h2>新用户 ? 欢迎注册.</h2></div>
<!--                                                    <form name="form2" id="ff2" method="post" action="register.php">-->
                                                   <form action="user.php" id="ff2" method="post" name="formUser" onsubmit="return register();">
                                                        <div class="form-group">
<!--                            <input type="text" class="form-control" placeholder="用户名 :" name="firstname" id="firstname" required>-->
                                                            <input name="username" type="text" placeholder="用户名 :" id="username" onblur="is_registered(this.value);" id="firstname" class="form-control" required/>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="邮箱 :" name="email" id="email" onblur="checkEmail(this.value);" required>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <input name="gender" id="gender" type="radio"> 男 <input name="gender" id="gender" type="radio"> 女 
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" placeholder="密码 :" name="password" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" id="password" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="password" class="form-control" onblur="check_conform_password(this.value);" placeholder="重复密码 :" name="confirm_password" id="repassword" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="agreement" id="agree" type="checkbox" value="1" checked="checked"> 我已阅读并遵守协议.
                                                                    </div>
                                                                   <input name="act" type="hidden" value="act_register" >
                                                                   <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                                                                    <button type="submit" class="btn btn-1">注册</button>
                                                                    </form>
                                                                    </div>
                                                                <?php endif; ?>
                                                                
                                                                    </div>
                                                                    </div>
                                                                    </div>
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