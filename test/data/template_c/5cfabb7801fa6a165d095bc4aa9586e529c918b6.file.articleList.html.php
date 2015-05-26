<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 16:09:38
         compiled from "tpl\class web\article\articleList.html" */ ?>
<?php /*%%SmartyHeaderCode:188405564784db88fb9-74619563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfabb7801fa6a165d095bc4aa9586e529c918b6' => 
    array (
      0 => 'tpl\\class web\\article\\articleList.html',
      1 => 1432649377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188405564784db88fb9-74619563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5564784dbb7dc0_34018178',
  'variables' => 
  array (
    'articleData' => 0,
    'key' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564784dbb7dc0_34018178')) {function content_5564784dbb7dc0_34018178($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />

<link href="tpl/class web/css/article/articleList.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="article-page-box">

	<div class="left-article">
		<div class="article-list-theme"><span>活跃文章</span></div>
		<div class="article-list-content">
			<ul>

				
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					
					<li>
						<a href="index.php?controller=frontInfo&method=readArticle&id=<?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
">
							<?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>

						</a>
						<span class="article-author-and-time">
							发布人: <?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['author'];?>
<!--发布人--> | <?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
<!--发布时间 -->
						</span>
					</li>
				<?php } ?>

			</ul>
		</div>
	</div>

	<div class="right-box">

		<div class="album-new">
			<div class="album-list-theme"><span>最新相册</span></div>

		</div>

		<div class="resource-new">
			<div class="resource-list-theme"><span>资源下载</span></div>

		</div>
	</div>


</div>











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


<?php echo $_smarty_tpl->getSubTemplate ("class web/index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/registerCheck.js"><?php echo '</script'; ?>
><!-- 注册验证 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/js.js"><?php echo '</script'; ?>
><!-- 登录、注册框弹出 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
><!-- 移动到用户头像 --><?php }} ?>
