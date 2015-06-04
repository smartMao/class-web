<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 16:45:33
         compiled from "tpl\class web\article\articleList.html" */ ?>
<?php /*%%SmartyHeaderCode:1955570648dcf72e8-42589381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cfabb7801fa6a165d095bc4aa9586e529c918b6' => 
    array (
      0 => 'tpl\\class web\\article\\articleList.html',
      1 => 1374196277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1955570648dcf72e8-42589381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleData' => 0,
    'key' => 0,
    'pageStr' => 0,
    'albumData' => 0,
    'resourceData' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5570648dd6c5f8_99250168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5570648dd6c5f8_99250168')) {function content_5570648dd6c5f8_99250168($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />

<link href="tpl/class web/css/article/articleList.css" rel="stylesheet" type="text/css?ver=1" />
<link href="tpl/class web/css/photo/pager.css"      rel="stylesheet" type="text/css" /><!-- 相册页面页码css文件 -->

<?php echo '<script'; ?>
 src="tpl/class web/js/jquery-1.8.2-min.js"><?php echo '</script'; ?>
><!-- 用于 header 的点击后标记 -->


</head>
<body>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="article-page-box">

	<div class="left-article">
		<div class="article-list-theme"><span>活跃文章</span></div>
		<div class="article-list-content">
			<ul>
				<?php if ($_smarty_tpl->tpl_vars['articleData']->value) {?>	
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
								 <?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
<!--发布时间 -->
							</span>
						</li>
					<?php } ?>
				<?php } else { ?>
					<span>暂无数据</span>
				<?php }?>


			</ul>
	 	</div>
	
		<div class="photo-page"> <!-- 分页模块 -->
			<?php echo $_smarty_tpl->tpl_vars['pageStr']->value;?>

		</div>

	</div>

	<div class="right-box">

		<div class="album-new">
			<div class="album-list-theme"><span>最新相册</span></div>
			<?php if ($_smarty_tpl->tpl_vars['albumData']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
					<a href="index.php?controller=photo&method=photoList&albumID=<?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" class="new-album-list-a" title="进入相册"><!-- 循环此块 -->
						<div class="new-album-list">
							 <img src="<?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" style="position:absolute;">
							 <div class="new-album-info"><!-- 最新相册信息块 -->
								<span class="new-album-title"><?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
<!-- 相册标题 --></span>
								<div class="new-album-date-and-author">
								
									<span><?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['username'];?>
 | 分享: <?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
</span>

								</div>
							 </div>
						</div>
					</a>
				<?php } ?>
			<?php } else { ?>
				<span>暂无相册数据</span>
			<?php }?>


		</div>

		<div class="resource-new">
			<div class="resource-list-theme"><span>资源下载</span></div>
			<div class="resource-new-content">
				
				<div class="resource-tab-list"><!-- tab -->
					<ul>

						<li class="resource-tab-new" id="onResource">
							<i class="on-new-icon">new</i>最新资源
						</li>
						<li class="resource-tab-see">
							<i class="tab-see-normal-icon" style="display:none;"></i>
							<i class="tab-see-on-icon"></i>
							访问最多
						</li>
						<li class="resource-tab-dowload">
							<i class="tab-dowload-normal-icon"></i>
							<i class="tab-dowload-on-icon"></i>
							下载最多
						</li>

					</ul>
				</div>

				<div class="resource-content-list">

					<!-- 最新资源 -->
					<div class="resource-new-list" style="display:block;">
						<ul>
							<?php if ($_smarty_tpl->tpl_vars['resourceData']->value) {?>
								<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['key']->value+1<4) {?>
										<li><!-- 1 - 3 -->
											<i><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</i> 
											<a href="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['link'];?>
" target="__blank" >
												<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>

											</a>
										</li> 
									<?php } else { ?>
										<li><!-- 4 - 10 -->
											<span><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span> 
											<a href="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['link'];?>
" target="__blank" >
												<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>

											</a>
										</li> 
									<?php }?>
								<?php } ?>
							<?php } else { ?>
								<span>暂无数据</span>
							<?php }?>
							
						</ul>
					</div>

					<!-- 访问最多标签 -->
					<div class="resource-see-list" style="display:none;">
						<ul>
							<li><i>1</i> <a href="#" >67k76k76</a></li>
							<li><i>2</i> <a href="#" >6kkkjfdf</a></li>
							<li><i>3</i> <a href="#" >fghfghf</a></li>
							<li><i>4</i> <a href="#" >dasdassdvsdvf</a></li>
							<li><i>5</i> <a href="#" >hg</a></li>
							<li><i>6</i> <a href="#" >fddf</a></li>
							<li><i>7</i> <a href="#" >qwevvsdvsdasdsa</a></li>
							<li><i>8</i> <a href="#" >dfbbbn</a></li>
							<li><i>9</i> <a href="#" >asdasgbbbdvffggsdasdsa</a></li>
							<li><i>10</i><a href="#" >888dasdvsdasdsa</a></li>
						</ul>
					</div>

					<!-- 下载最多标签 -->
					<div class="resource-dowload-list" style="display:none;">
						<ul>
							<li><i>1</i> <a href="#" >56756756</a></li>
							<li><i>2</i> <a href="#" >567567</a></li>
							<li><i>3</i> <a href="#" >asd56752334asdrasdsa</a></li>
							<li><i>4</i> <a href="#" >53453</a></li>
							<li><i>5</i> <a href="#" >hg</a></li>
							<li><i>6</i> <a href="#" >44444</a></li>
							<li><i>7</i> <a href="#" >111</a></li>
							<li><i>8</i> <a href="#" >34</a></li>
							<li><i>9</i> <a href="#" >77888</a></li>
							<li><i>10</i><a href="#" >345345</a></li>
						</ul>
					</div>
				</div>




			</div>

		</div>
	

	</div>

	

</div>






<?php echo $_smarty_tpl->getSubTemplate ("class web/index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
 type="text/javascript" src="tpl/class web/js/registerCheck.js"><?php echo '</script'; ?>
><!-- 注册验证 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/js.js"><?php echo '</script'; ?>
><!-- 登录、注册框弹出 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
><!-- 移动到用户头像 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/articleListTab.js"><?php echo '</script'; ?>
><!-- 资源下载部分的tab切换 -->
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/articleListAlbumCenter.js"><?php echo '</script'; ?>
><!-- 最新相册的封面图居中 -->
<?php echo '<script'; ?>
 type="text/javascript">
	window.onload = function(){

		albumCoverCenter(); // 文章列表页面的右侧相册封面图的上下左右居中
	
	}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/articleInfo.js"><?php echo '</script'; ?>
>

<?php }} ?>
