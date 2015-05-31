<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-31 15:03:05
         compiled from "tpl\class web\classPhoto\photoList.html" */ ?>
<?php /*%%SmartyHeaderCode:19225556b0689e80939-92113979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c5b669059d0675e7017f36a61c91c71dcc94d8' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\photoList.html',
      1 => 1432563057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19225556b0689e80939-92113979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumData' => 0,
    'photoData' => 0,
    'key' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556b0689ec2fc8_74924639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556b0689ec2fc8_74924639')) {function content_556b0689ec2fc8_74924639($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link href="tpl/class web/css/gather.css"  	 		rel="stylesheet" type="text/css" >
<link href="tpl/class web/css/photo/photoList.css"  rel="stylesheet" type="text/css" >
<link href="tpl/class web/css/index/header.css"     rel="stylesheet" type="text/css" /><!-- 头部css文件 -->
<link href="tpl/class web/css/index/login.css"      rel="stylesheet" type="text/css" /><!-- 登录注册css文件 -->
<link href="tpl/class web/css/index/footer.css"     rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 src="tpl/class web/js/jquery-1.8.2-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="tpl/class web/classPhoto/layer/layer.min.js"><?php echo '</script'; ?>
>


</head>
<body onload=" waterfall( 'photoBox' , 2 ) "><!-- 调用瀑布流函数 -->

<?php echo $_smarty_tpl->getSubTemplate ('class web/index/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
         
<?php echo $_smarty_tpl->getSubTemplate ('class web/index/login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="theme">
	<div class="info-box">
		<span class="title"><?php echo $_smarty_tpl->tpl_vars['albumData']->value['title'];?>
<!-- title --></span>
		<div class="author-photo">
			<img src="./tpl/class web/images/banner/01.jpg" /><!-- src -->
		</div>
		<span class="author-name"><!-- name --></span>
	</div>
</div>

<div class="content">

	<ul class="photo-list">
		<div class="main" id="main">
			
				<li id="li">
					<div class="pic" id="photoBox">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photoData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['photoData']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" layer-src="<?php echo $_smarty_tpl->tpl_vars['photoData']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" id="image-show"
						alt="">
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['photoData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" /><!-- photo ID -->
	<!--  相册评论快  --><div id="photoComment-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="display:none;">
							<span class="photo">11</span><!-- 调试 -->
							<br/>
							评论块<?php echo $_smarty_tpl->tpl_vars['key']->value;?>

						</div>
					<?php } ?>
					</div>
				</li>
			
		</div>
	</ul>
</div>



<?php echo $_smarty_tpl->getSubTemplate ('class web/index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 	



<?php if ($_smarty_tpl->tpl_vars['username']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel    = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');
		loginModel.style.display = "none";
		userUserName.style.display = "block";
	<?php echo '</script'; ?>
>
<?php } else { ?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel    = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');
		loginModel.style.display = "block";
		userUserName.style.display = "none";
	<?php echo '</script'; ?>
>
<?php }?>

</body>
</html>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/waterfallFront.js"><?php echo '</script'; ?>
><!-- 照片瀑布流 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/registerCheck.js"><?php echo '</script'; ?>
><!-- 注册验证 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/nav.js"><?php echo '</script'; ?>
><!-- 导航点击焦点 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/js.js"><?php echo '</script'; ?>
><!-- 登录层 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
><!-- move到用户头像上出来的选项卡 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/frontPhotoShow.js?var=1"><?php echo '</script'; ?>
> <!-- 照片展出层 --><?php }} ?>
