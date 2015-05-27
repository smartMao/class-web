<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-27 15:12:26
         compiled from "tpl\class web\article\articleInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:274575565c2baef72c5-23946889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f98650cb75267a094f6032dbf0cc94e2238538c' => 
    array (
      0 => 'tpl\\class web\\article\\articleInfo.html',
      1 => 1432644352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274575565c2baef72c5-23946889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userPhoto' => 0,
    'articleData' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5565c2baf31c59_16442240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5565c2baf31c59_16442240')) {function content_5565c2baf31c59_16442240($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />

<link href="tpl/class web/css/breadNav.css" rel="stylesheet" type="text/css" /><!-- 面包屑导航 -->

<link href="tpl/class web/css/article/articleInfo.css" rel="stylesheet" type="text/css" />


<?php echo '<script'; ?>
 src="tpl/class web/js/jquery-1.8.2-min.js"><?php echo '</script'; ?>
><!-- 用于 header 的点击后标记 -->


</head>
<body  onselectstart=""> <!-- 设置为空是为了允许文本选中 -->

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="article-info-box">

<!-- 面包屑导航 -->
	<div class="bread-nav">
		<a href="index.php?controller=header&method=index">首页</a>&nbsp;>
		<a href="index.php?controller=frontInfo&method=articleList">活跃文章</a>&nbsp;>
		<span>正文</span>
	</div>
	<br/>

<!-- 左侧头像区 -->
	<div class="left-photo"> 
		<div class="photo-area">
			<img src="<?php echo $_smarty_tpl->tpl_vars['userPhoto']->value;?>
" width="65" height="65">
		</div>
	</div>


<!-- 右侧内容区 -->
	<div class="right-content">
		<div class="article-info">
			<div class="article-title">
				<h1><?php echo $_smarty_tpl->tpl_vars['articleData']->value['title'];?>
<!-- 文章标题 --></h1>
			</div>

			<div class="article-author-and-time">
				<div class="article-author">
					<span class="author">
						发布人:<span><?php echo $_smarty_tpl->tpl_vars['articleData']->value['author'];?>
<!-- 文章作者 --></span>&nbsp;|&nbsp;
					</span>
				</div>
				<div class="article-time">
					<span><?php echo $_smarty_tpl->tpl_vars['articleData']->value['time'];?>
<!-- 时间 --></span>
				</div>
			</div>
		</div>

		<div class="article-content">
				<!-- 文章内容 -->
				<?php echo $_smarty_tpl->tpl_vars['articleData']->value['content'];?>

		</div>

		
	</div>

	<div style="clear:both;"></div><!-- 清除浮动 -->


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
 src="tpl/class web/js/articleInfo.js"><?php echo '</script'; ?>
><!-- 文章信息 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/registerCheck.js"><?php echo '</script'; ?>
><!-- 注册验证 -->

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/js.js"><?php echo '</script'; ?>
><!-- 登录、注册框弹出 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
><!-- 移动到用户头像 --><?php }} ?>
