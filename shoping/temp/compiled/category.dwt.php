<!DOCTYPE html>
<html lang="en">
    <head>
<meta name="Generator" content="ECSHOP v2.7.3" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mobile Shop</title>

        
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>css/bootstrap.min.css"  type="text/css">

        
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_path']; ?>">


        
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>font-awesome/css/font-awesome.min.css"  type="text/css">
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>fonts/font-slider.css" type="text/css">

        
        <script src="<?php echo $this->_var['ecs_css_root']; ?>js/jquery-2.1.1.js"></script>

          	 
        <script src="<?php echo $this->_var['ecs_css_root']; ?>js/bootstrap.min.js"></script>

        
        
        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
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

        
        
        
        <div id="page-content" class="single-page" style="margin-top: 0px;">
            <div class="container">
                <div class="row" style="margin-left: 20px;margin-bottom: 3px;">
                    <div class="col-lg-12">
                        <ul class="breadcrumb" style="margin-bottom: 10px;margin-top: 0px;">
                            <li><a href="index.php">首页</a></li>
                            <li><a href="category.php">商品分类 : GSM手机</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="main-content" class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="products">
                                    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="product">
                                            <div class="image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" /></a></div>
                                            <div class="buttons">
                                                <a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                                                <a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
                                                <a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
                                            </div>
                                            <div class="caption">
                                                <div class="name"><h3><a href="product.html"><?php echo $this->_var['goods']['short_style_name']; ?></a></h3></div>
                                                <div class="price">$<?php echo $this->_var['goods']['shop_price']; ?><span>$<?php echo $this->_var['goods']['promote_price']; ?></span></div>
                                                <div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="product">
                                            <div class="image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" /></a></div>
                                            <div class="buttons">
                                                <a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                                                <a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
                                                <a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
                                            </div>
                                            <div class="caption">
                                                <div class="name"><h3><a href="product.html"><?php echo $this->_var['goods']['short_style_name']; ?></a></h3></div>
                                                <div class="price">$<?php echo $this->_var['goods']['shop_price']; ?><span>$<?php echo $this->_var['goods']['promote_price']; ?></span></div>
                                                <div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <div class="product">
                                            <div class="image"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" /></a></div>
                                            <div class="buttons">
                                                <a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                                                <a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
                                                <a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
                                            </div>
                                            <div class="caption">
                                                <div class="name"><h3><a href="product.html"><?php echo $this->_var['goods']['short_style_name']; ?></a></h3></div>
                                                <div class="price">$<?php echo $this->_var['goods']['shop_price']; ?><span>$<?php echo $this->_var['goods']['promote_price']; ?></span></div>
                                                <div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="sidebar" class="col-md-4">
                        <div class="widget wid-categories">
                            <div class="heading"><h4>手机类型</h4></div>
                            <div class="content">
                                <ul><?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                    <li><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

                                </ul>
                            </div>
                        </div>
                        <div class="widget wid-type">
                            <div class="heading"><h4>TYPE</h4></div>
                            <div class="content">
                                <select>
                                    <option value="EL" selected>Electronics</option>
                                    <option value="MT">Mice and Trackballs</option>
                                    <option value="WC">Web Cameras</option>
                                    <option value="TA">Tablates</option>
                                    <option value="AP">Audio Parts</option>
                                </select>
                            </div>
                        </div>
                        <div class="widget wid-discouts">
                            <div class="heading"><h4>DISCOUNTS</h4></div>
                            <div class="content">
                                <label class="checkbox"><input type="checkbox" name="discount" checked="">Upto - 10% (20)</label>
                                <label class="checkbox"><input type="checkbox" name="discount">40% - 50% (5)</label>
                                <label class="checkbox"><input type="checkbox" name="discount">30% - 20% (7)</label>
                                <label class="checkbox"><input type="checkbox" name="discount">10% - 5% (2)</label>
                                <label class="checkbox"><input type="checkbox" name="discount">Other(50)</label>
                            </div>
                        </div>
                        <div class="widget wid-brand">
                            <div class="heading"><h4>品牌</h4></div>
                            <div class="content">
                                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                                <ul>
                                    <li><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
                                
                                </ul>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<!--                                <label class="checkbox"><input type="checkbox" name="brand">Nokia</label>
                                <label class="checkbox"><input type="checkbox" name="brand">Samsung</label>
                                <label class="checkbox"><input type="checkbox" name="brand">Iphone</label>
                                <label class="checkbox"><input type="checkbox" name="brand">HTC</label>
                                <label class="checkbox"><input type="checkbox" name="brand">Oppo</label>
                                <label class="checkbox"><input type="checkbox" name="brand">Kings</label>
                                <label class="checkbox"><input type="checkbox" name="brand">Zumba</label>	-->
                            </div>
                        </div>
                        <div class="widget wid-product">
                            <div class="heading"><h4>浏览历史</h4></div>
                            <div class="content">
                                <?php 
$k = array (
  'name' => 'history_date',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                                

                            </div>
                        </div>
                    </div>
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
