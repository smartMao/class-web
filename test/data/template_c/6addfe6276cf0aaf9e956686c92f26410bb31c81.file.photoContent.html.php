<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-27 16:24:44
         compiled from "tpl\class web\classPhoto\photoContent.html" */ ?>
<?php /*%%SmartyHeaderCode:28794553904af8e4a15-70980815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6addfe6276cf0aaf9e956686c92f26410bb31c81' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\photoContent.html',
      1 => 1430144659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28794553904af8e4a15-70980815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553904afa387e6_58398938',
  'variables' => 
  array (
    'albumData' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553904afa387e6_58398938')) {function content_553904afa387e6_58398938($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	
	<div class="photo-content">
		
		<!-- 相册搜索 -->
		<div class="photo-search">
			<input type="text" placeholder="发布人/标题"/>
			<input type="button"  value="" />
		</div>

		<!-- 相册公告与排序 -->
		<div class="photo-public">
			
			<!-- 公告 -->
			<span class="photo-public-icon"></span>
			<span class="photo-public-span">相册动态: 
				<span class="photo-public-name">随便</span>
				 在 
				<span class="photo-public-time">2014/11/22</span>
				 上传《<span class="photo-public-photoname">大夫人一日游</span>》组图 
			</span>

			<!-- 排序 -->
			<div class="photo-public-sort">
				<span class="photo-public-sort-span">排序设置</span>
				<span class="photo-public-sort-UP">∧</span>
				<span class="photo-public-sort-DOWN">∨</span>
			</div>

			<span class="photo-public-shadow-line"></span>

		</div>

		<div class="photo-list">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['albumData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li>
					<div class="position"><!-- 此div用于position定位 -->
						<div class="photo-list-cover">
							<!-- 放封面图片 295*210 -->
							<img src="<?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['path'];?>
" />
							<span class="photo-list-more">MORE＞</span>
						</div>
						<h3  class="photo-list-title">
							<!-- 相册标题 -->
							<?php if ($_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['titleLength']>42) {?>
								<?php echo (substr($_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'],"0","42")).("...");?>
	
							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>

							<?php }?>
						</h3>
						<div class="photo-list-user-photo">
							<div class="photo-list-user-format">
								<!-- 用户头像 -->
								<a href="#">
									<img src="<?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['photo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['username'];?>
" />
								</a>
							</div>
						</div>

						<!-- 相册发布时间 -->
						<div class="photo-list-time">
							<span class="photo-list-time-icon"></span>
							<span class="photo-list-time-span"><!-- 时间 --><?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['time'];?>
</span>				
						</div>

						<!-- 浏览与评论 -->
						<div class="photo-list-browse-and-comment">
							<div class="photo-list-browse">
								<span class="photo-list-browse-icon"></span>
								<span class="photo-list-browse-span">
									浏览(<span class="photo-list-browse-number"><?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['browseNum'];?>
<!-- 浏览人数 --></span>)
								</span>
							</div>
							<div class="photo-list-comment">
								<span class="photo-list-comment-icon"></span>
								<span class="photo-list-comment-span">
									评论(<span class="photo-list-comment-number"><?php echo $_smarty_tpl->tpl_vars['albumData']->value[$_smarty_tpl->tpl_vars['key']->value]['commentNum'];?>
<!-- 评论人数 --></span>)
								</span>
							</div>
						</div>
					</div>
				</li>
			<?php } ?>
				
			</ul>
			
		</div>

	</div>

</body>
</html><?php }} ?>
