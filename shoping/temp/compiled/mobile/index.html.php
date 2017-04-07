<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ECShop_mobile</title>
</head>

<body>

<p align='left'>
<?php if ($this->_var['user_name']): ?>
    [<a href='user.php?act=user_center'>用户中心</a>]&nbsp;[<a href='user.php?act=logout'>退出</a>]<br/>
<?php else: ?>
    ［<a href='user.php?act=login'>登录</a>］&nbsp;［<a href='user.php?act=register'>免费注册</a>］<br/>
<?php endif; ?>
<img src='<?php echo empty($this->_var['wap_logo']) ? '../images/wap_logo.png' : $this->_var['wap_logo']; ?>' alt='LOGO' /><br/>

<form name="searchForm" method="get" action="search.php">
 <input name="keywords" type="text" />
 <input type="submit" value="商品搜索"/>
</form>
<?php if ($this->_var['searchkeywords']): ?>
 热门搜索 ：
 <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
 <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<br/>--------------<br/>
<?php if ($this->_var['best_num'] > 0): ?>
[精品推荐]&gt;&gt;<a href='goods_list.php?type=best'>更多</a><br/>
  <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best_data');if (count($_from)):
    foreach ($_from AS $this->_var['best_data']):
?>
      <a href='goods.php?id=<?php echo $this->_var['best_data']['id']; ?>'><?php echo $this->_var['best_data']['name']; ?></a>[<?php echo $this->_var['best_data']['shop_price']; ?>]<br/>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<br/>--------------<br/>
<?php if ($this->_var['promote_num'] > 0): ?>
[促销商品]&gt;&gt;<a href='goods_list.php?type=promote'>更多</a><br/>
  <?php $_from = $this->_var['promote_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promote_data');if (count($_from)):
    foreach ($_from AS $this->_var['promote_data']):
?>
      <a href='goods.php?id=<?php echo $this->_var['promote_data']['id']; ?>'><?php echo $this->_var['promote_data']['name']; ?></a>[<?php echo $this->_var['promote_data']['shop_price']; ?>]<br/>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<br/>--------------<br/>
<?php if ($this->_var['hot_num'] > 0): ?>
[热门商品]&gt;&gt;<a href='goods_list.php?type=hot'>更多</a><br/>
  <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'hot_data');if (count($_from)):
    foreach ($_from AS $this->_var['hot_data']):
?>
      <a href='goods.php?id=<?php echo $this->_var['hot_data']['id']; ?>'><?php echo $this->_var['hot_data']['name']; ?></a>[<?php echo $this->_var['hot_data']['shop_price']; ?>]<br/>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<br/>--------------<br/>
&gt;&gt;商品分类&gt;&gt;<a href='cat_all.php'>更多</a><br/><br/>

<?php $_from = $this->_var['pcat_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pcat_data');if (count($_from)):
    foreach ($_from AS $this->_var['pcat_data']):
?>
<a href='category.php?c_id=<?php echo $this->_var['pcat_data']['id']; ?>'><?php echo $this->_var['pcat_data']['name']; ?></a>|&nbsp;&nbsp;
<?php $_from = $this->_var['pcat_data']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_data');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat_data']):
        $this->_foreach['foo']['iteration']++;
?>
<?php if ($this->_foreach['foo']['iteration'] <= 3): ?>
<a href='category.php?c_id=<?php echo $this->_var['cat_data']['id']; ?>'><?php echo $this->_var['cat_data']['name']; ?></a>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
&nbsp;&nbsp;<a href='cat_all.php'>...更多</a><br/>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<br/>--------------<br/>
<?php if ($this->_var['brand_array']): ?>
品牌专区&gt;&gt;<a href='brands.php'>更多</a><br/>
<?php $_from = $this->_var['brand_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand_data');if (count($_from)):
    foreach ($_from AS $this->_var['brand_data']):
?>
<a href='brands.php?b_id=<?php echo $this->_var['brand_data']['brand_id']; ?>'><?php echo $this->_var['brand_data']['brand_name']; ?></a><br/>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<br/>--------------<br/>
[站内资讯]&gt;&gt;<a href='article.php'>更多</a><br/>
<?php if ($this->_var['article_array']): ?>
<?php $_from = $this->_var['article_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_data');if (count($_from)):
    foreach ($_from AS $this->_var['article_data']):
?>
<a href='article.php?act=detail&amp;a_id=<?php echo $this->_var['article_data']['article_id']; ?>'><?php echo $this->_var['article_data']['title']; ?></a><br/>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
<?php echo $this->_var['footer']; ?>
</p>

</body>
</html>