<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 11:19:06
         compiled from "tpl\class web\index\info.html" */ ?>
<?php /*%%SmartyHeaderCode:12665556c238a4dc469-15752869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1427dd156988011c28418bdd5378a24033af497' => 
    array (
      0 => 'tpl\\class web\\index\\info.html',
      1 => 1432774929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12665556c238a4dc469-15752869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articleData' => 0,
    'key' => 0,
    'resourceData' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556c238a51eaf7_58481780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c238a51eaf7_58481780')) {function content_556c238a51eaf7_58481780($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'E:\\XAMPP\\htdocs\\class-web\\test\\framework\\libs\\view\\Smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html>
<head>
	<title>信息栏</title>

</head>
<body>
<div class="info-all">
	<div class="info">
		<div class="dynamic">
			<div class="dynamic-title">
				<span>动态更新</span>
				<i class="dynamic-title-icon"></i>
			</div>
			<div class="dynamic-content">
				<div class="dynamic-content-schedule" id="dynamicContentSchedule">
					<span>近期活动文章</span>
				</div>
				<div class="dynamic-content-tieba" id="dynamicContentTieba">
					<span>班级社区热门帖</span>
				</div>
				<div class="dynamic-content-schedule-ul" id="dynamicContentScheduleUl">
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['articleData']->value) {?>

							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['articleData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

								<?php if ($_smarty_tpl->tpl_vars['key']->value+1<4) {?> <!-- 如果是前三条文章 -->
									<li>
										<i><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</i>
										<span>
										<a href="index.php?controller=frontInfo&method=readArticle&id=<?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'],14,'...');?>

										</a>
										</span>
									</li>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['key']->value+1>=4&&$_smarty_tpl->tpl_vars['key']->value+1<=10) {?> <!-- 如果是后7条文章 -->
									<li>
										<i class="bottom"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</i>
										<span><a href="index.php?controller=frontInfo&method=readArticle&id=<?php echo $_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'],14,'...');?>
</a>
										</span>
									</li>
								<?php }?>

								<?php if ($_smarty_tpl->tpl_vars['key']->value+1==10) {?> <!-- 如果有10篇文章以上,显示 “查看更多” 按钮 -->
									<a href="index.php?controller=frontInfo&method=articleList&page=1" class="see-more">		查看更多→
									</a>
								<?php }?>

							<?php } ?>

						<?php } else { ?>
							<span>当前并没有文章</span>
						<?php }?>

						

					</ul>			
				</div>
				<div class="dynamic-content-tieba-ul" id="dynamicContentTiebaUl">
					<ul>
						<li>
							<i>1</i>
							<span></span>
						</li>
						<li>
							<i>2</i>
							<span></span>
						</li>
						<li>
							<i>3</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">4</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">5</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">6</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">7</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">8</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">9</i>
							<span></span>
						</li>
						<li>
							<i class="bottom">10</i>
							<span></span>
						</li>

					</ul>								
				</div>
			</div>
		</div>
		<div class="video">
			<div class="video-title">
				<span>视频分享</span>
				<i class="video-title-icon"></i>
			</div>
			<div class="video-content">
				<div class="video-content-main"><embed src="http://player.youku.com/player.php/Type/Folder/Fid/23804658/Ob/1/sid/XOTU5MDIwMzU2/v.swf" quality="high" width="365" height="260" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed></div>
				<!-- 
					

				 -->
				<div class="video-content-information">
						<span>我是内容</span>
				</div>
				<div class="video-content-change">
					<div class="video-content-change-left-page"></div>
					<div class="video-content-change-content">
						<span class="video-content-change-content-last-chapter">中国若亚方舟2014矫正版.av</span>
						<i class="cut-off-rule"></i>
						<span class="video-content-change-content-next-chapter">中国若亚方舟2014矫正版.av</span>

					</div>
					<div class="video-content-change-right-page"></div>

				</div>

			</div>
		</div>
		<div class="resources">
			<div class="resources-title">
				<span>资源下载</span>
				<i class="resources-title-icon"></i>
			</div>
			<div class="resources-search">
				<form>
					<input type="text" class="resources-search-input" placeholder="关键词/推荐人"/>
					<input type="submit" class="resources-search-submit" value="">
				</form>
			</div>
			<div class="resources-ul">
				<ul>
					<?php if ($_smarty_tpl->tpl_vars['resourceData']->value!='') {?>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resourceData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							
							<?php if ($_smarty_tpl->tpl_vars['key']->value+1<=10) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['resourceData']->value[$_smarty_tpl->tpl_vars['key']->value]['title'];?>
</a></li>
							<?php }?>

							
						<?php } ?>
					<?php } else { ?>
						<span>暂无数据</span>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['count']->value>10) {?>
						<div class="resources-more">浏览更多→</div>  
					<?php }?>
		
				</ul>
			</div>
			 
		</div>
	</div>	
</div>
</body>
</html><?php }} ?>
