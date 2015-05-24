<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-24 11:40:00
         compiled from "tpl\backstage\photo\album\album.html" */ ?>
<?php /*%%SmartyHeaderCode:398155619c70b5c8d3-80373123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61a0942d79b45ed024496f5aab7c5da5aad2156a' => 
    array (
      0 => 'tpl\\backstage\\photo\\album\\album.html',
      1 => 1431678140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '398155619c70b5c8d3-80373123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'albumList' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55619c70cd77b5_78505387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55619c70cd77b5_78505387')) {function content_55619c70cd77b5_78505387($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link rel="stylesheet" type="text/css" href="tpl/backstage/photo/style/backAlbum.css?v=1" />
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css" />
</head>
<body>



	<div class="add-common-frame">
		<span>本站一共有 <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 个相册</span>
		<div class="album-create-box">
			<i>+</i>
			<a href="admin.php?controller=back&method=showAlbumCreate" class="common-add-btn album-create">
			添加相册
			</a>
		</div>
		
	</div>

	
	
	<ul class="photo-list">
		<?php if ($_smarty_tpl->tpl_vars['albumList']->value!='') {?>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li class="album-box">
					<ul class="photo-box">

						<li class="album-title"><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
</li>
						<a href="admin.php?controller=back&method=photoList&id=<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" class="goto-photo">
							<li class="album-cover">
								<img src="<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" alt />
							</li>
						</a>
						<li class="album-op">

							<ol class="browser">
								<i class="icon"></i>
								<span>浏览(<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['browseNum'];?>
)<!-- 浏览数 --></span>
							</ol>
								
							<ol class="comment">
								<i class="icon"></i>
								<span>评论(<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['commentNum'];?>
)<!-- 评论数 --></span>
							</ol>
							
							<ol class="edit">
								<a href="admin.php?controller=back&method=albumEditShow&id=<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
"></a>
							</ol>
							<ol class="del"> 
							   <a href="admin.php?controller=back&method=albumDel&id=<?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" 
							   onclick="return confirm('删除相册将清空该相册里的所有照片！');"></a>
							</ol>

						</li>
						<li class="album-author">
							<ol class="author">上传作者</ol>
							<ol class="author-info"><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['username'];?>
</ol>
						</li>
						<li class="album-time">
							<ol class="time">上传时间</ol>
							<ol class="time-info"><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
</ol>
						</li>
						<li class="album-power">
							<ol class="power">上传权限</ol>
							<ol class="power-info"><?php echo $_smarty_tpl->tpl_vars['albumList']->value[$_smarty_tpl->tpl_vars['key']->value]['power'];?>
</ol>
						</li>
				
					</ul>
				</li>
			<?php } ?>
		<?php } else { ?>
			<span>暂无相册,请添加</span>
		<?php }?>

	</ul>

</body>
</html>

<?php }} ?>
