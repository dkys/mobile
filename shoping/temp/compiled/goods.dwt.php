<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
    <head>
<meta name="Generator" content="ECSHOP v2.7.3" />
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $this->_var['page_title']; ?></title>
        
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>css/bootstrap.min.css"  type="text/css">
          
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_path']; ?>">
          
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>font-awesome/css/font-awesome.min.css"  type="text/css">
        <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_root']; ?>fonts/font-slider.css" type="text/css">
         
        <script src="<?php echo $this->_var['ecs_css_root']; ?>js/jquery-2.1.1.js"></script>
  <script type="text/javascript">
      var select_spe = "请选择颜色";
      var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
      var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
//      var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
       
       <?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
       <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,utils.js')); ?>
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
                    <div id="cart"><a class="btn btn-1" href="flow.php"><span class="glyphicon glyphicon-shopping-cart"></span>购物车 :  <?php 
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
                            <li><a href="category.html">分类</a></li>
                            <li><a href="#">商品名称</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div id="main-content" class="col-md-8">
                        <div class="product">
                            <div class="col-md-6">
                                <div class="image">
                                    <img src="<?php echo $this->_var['goods']['goods_img']; ?>" />
                                    <div class="image-more">
                                        <ul class="row">
                                            <li class="col-lg-3 col-sm-3 col-xs-4">
                                                <a href="#"><img class="img-responsive" src="<?php echo $this->_var['goods']['goods_img']; ?>"></a>
                                            </li>
                                            <li class="col-lg-3 col-sm-3 col-xs-4">
                                                <a href="#"><img class="img-responsive" src="themes/cpts_467_tq/images/galaxy-note-2.jpg"></a>
                                            </li>
                                            <li class="col-lg-3 col-sm-3 col-xs-4">
                                                <a href="#"><img class="img-responsive" src="themes/cpts_467_tq/images/galaxy-note-3.jpg"></a>
                                            </li>
                                            <li class="col-lg-3 col-sm-3 col-xs-4">
                                                <a href="#"><img class="img-responsive" src="themes/cpts_467_tq/images/galaxy-note-4.jpg"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="caption">
                                    <div class="name"><h3><?php echo $this->_var['goods']['goods_style_name']; ?></h3></div>
                                    <div class="info">
                                        <ul>
                                            <li><?php echo $this->_var['lang']['goods_brand']; ?>: <?php echo $this->_var['goods']['goods_brand']; ?></li>
                                            <li><?php echo $this->_var['lang']['goods_sn']; ?>: <?php echo $this->_var['goods']['goods_sn']; ?></li>
                                        </ul>
                                    </div>
                                    <div class="price">$122<span>$98</span></div>
                                    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
                                    <div class="options">
                                        选择颜色
                                        <select>
                                            <option value="" selected>----请选择----</option>
                                            <option value="red">红色</option>
                                            <option value="black">灰色</option>
                                        </select>
                                    </div>
                                    <strong><?php echo $this->_var['lang']['goods_rank']; ?></strong>
                                    <div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                                    <div class="well"><label>数量: </label> <input class="form-inline quantity" type="text" value="1"><a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn btn-2 ">添加到购物车</a></div>
                                    <div class="share well">
                                        <strong style="margin-right: 13px;">分享给朋友 :</strong>
                                        <a href="#" class="share-btn" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="share-btn" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="share-btn" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </form>
                            <script type="text/javascript">
//<![CDATA[
                                
                                /**
                                 * 用户添加标记的处理函数
                                 */
                                function submitTag(frm)
                                {
                                try
                                {
                                var tag = frm.elements['tag'].value;
                                var idx = frm.elements['goods_id'].value;
                                if (tag.length > 0 && parseInt(idx) > 0)
                                {
                                Ajax.call('user.php?act=add_tag', "id=" + idx + "&tag=" + tag, submitTagResponse, "POST", "JSON");
                                }
                                }
                                catch (e) {alert(e);}

                                return false;
                                }

                                function submitTagResponse(result)
                                {
                                var div = document.getElementById('ECS_TAGS');
                                if (result.error > 0)
                                {
                                alert(result.message);
                                }
                                else
                                {
                                try
                                {
                                div.innerHTML = '';
                                var tags = result.content;
                                for (i = 0; i < tags.length; i++)
                                {
                                div.innerHTML += '<a href="search.php?keywords=' + tags[i].word + '" style="color:#006ace; text-decoration:none; margin-right:5px;">' + tags[i].word + '[' + tags[i].count + ']<\/a>&nbsp;&nbsp; ';
                                }
                                }
                                catch (e) {alert(e);}
                                }
                                }
                                
//]]>
                            </script>
                            <div class="clear"></div>
                        </div>	
                        <div class="product-desc">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#description">商品描述</a></li>
                                <li><a href="#review">用户评价</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="description" class="tab-pane fade in active">
                                    <h4><?php echo $this->_var['lang']['goods_attr']; ?></h4>
                                    <p><?php echo $this->_var['goods']['goods_desc']; ?></p>
                                    <h4>Sample Lorem Ipsum Text</h4>
                                    <p>Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque aliquet lacus vitae pede. Nullam mollis dolor ac nisi. Phasellus sit amet urna. Praesent pellentesque sapien sed lacus. Donec lacinia odio in odio. In sit amet elit. Maecenas gravida interdum urna. Integer pretium, arcu vitae imperdiet facilisis, elit tellus tempor nisi, vel feugiat ante velit sit amet mauris. Vivamus arcu. Integer pharetra magna ac lacus. Aliquam vitae sapien in nibh vehicula auctor. Suspendisse leo mauris, pulvinar sed, tempor et, consequat ac, lacus. Proin velit. Nulla semper lobortis mauris. Duis urna erat, ornare et, imperdiet eu, suscipit sit amet, massa. Nulla nulla nisi, pellentesque at, egestas quis, fringilla eu, diam.</p>
                                </div>
                                <div id="review" class="tab-pane fade">
                                    <div class="review-text">
                                        <p>用户评论:</p>
                                    </div>
                                    <div class="review-form">
                                        <h4>请回复</h4>
                                        <form name="form1" id="ff" method="post" action="review.php">
                                            <label>
                                                <span>输入您的邮箱:</span>
                                                <input type="text"  name="name" id="name" required>
                                            </label>
                                            <label>
                                                <span>评论内容:</span>
                                                <textarea name="message" id="message"></textarea>
                                            </label>
                                            <div class="text-right">
                                                <input class="btn btn-default" type="reset" name="reset" value="Reset">
                                                <input class="btn btn-default" type="submit" name="Submit" value="Submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-related">
                            <div class="heading"><h2>相关产品</h2></div>
                            <div class="products">
                                <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['releated_goods_data']):
?>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <div class="product">
                                        <div class="image"><a href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" /></a></div>
                                        <div class="buttons">
                                            <a class="btn cart" href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>
                                            <a class="btn wishlist" href="#"><span class="glyphicon glyphicon-heart"></span></a>
                                            <a class="btn compare" href="#"><span class="glyphicon glyphicon-transfer"></span></a>
                                        </div>
                                        <div class="caption">
                                            <div class="name"><h3><a href="product.html"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></h3></div>
                                            <div class="price"><?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?><span><?php echo $this->_var['releated_goods_data']['shop_price']; ?></span></div>
                                            <div class="rating"><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                            </div>
                            <div class="clear"></div>
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
                            <div class="heading"><h4>type</h4></div>
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
                            <div class="heading"><h4>相关配件</h4></div>
                            <div class="content">
                                <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_65169700_1487898569');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_65169700_1487898569']):
?>
                                <ul class="clearfix">
                                    <li class="goodsimg" style="display: inline-block;">
                                        <a href="<?php echo $this->_var['goods_0_65169700_1487898569']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_65169700_1487898569']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_65169700_1487898569']['name']); ?>" class="B_blue" /></a>
                                    </li>
                                    <li style="display: inline-block;">
                                        <a href="<?php echo $this->_var['goods_0_65169700_1487898569']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_65169700_1487898569']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_65169700_1487898569']['short_name']); ?></a><br />
                                        <?php echo $this->_var['lang']['fittings_price']; ?><font class="f1"><?php echo $this->_var['goods_0_65169700_1487898569']['fittings_price']; ?></font><br />
                                    </li>
                                </ul>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                <!--							<label class="checkbox"><input type="checkbox" name="discount" checked="">Upto - 10% (20)</label>
                                                                                        <label class="checkbox"><input type="checkbox" name="discount">40% - 50% (5)</label>
                                                                                        <label class="checkbox"><input type="checkbox" name="discount">30% - 20% (7)</label>
                                                                                        <label class="checkbox"><input type="checkbox" name="discount">10% - 5% (2)</label>
                                                                                        <label class="checkbox"><input type="checkbox" name="discount">Other(50)</label>-->
                            </div>
                        </div><?php echo $this->_var['brand']['url']; ?>
                        <div class="widget wid-brand">
                            <div class="heading"><h4>品牌</h4></div>
                            <div class="content">
                                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
                                <ul>
                                    <li><a href="<?php echo $this->_var['brand']['0']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
                                
                                </ul>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            
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

        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">         
                    <div class="modal-body">                
                    </div>
                </div>
            </div>
        </div>

  
        </script>
    </body>
</html>
