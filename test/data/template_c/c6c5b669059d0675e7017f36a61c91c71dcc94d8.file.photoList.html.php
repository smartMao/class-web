<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-04 16:47:00
         compiled from "tpl\class web\classPhoto\photoList.html" */ ?>
<?php /*%%SmartyHeaderCode:587557064e41eeb46-74463843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c5b669059d0675e7017f36a61c91c71dcc94d8' => 
    array (
      0 => 'tpl\\class web\\classPhoto\\photoList.html',
      1 => 1433429056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '587557064e41eeb46-74463843',
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
  'unifunc' => 'content_557064e4238ed1_56755101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557064e4238ed1_56755101')) {function content_557064e4238ed1_56755101($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
<link href="tpl/class web/css/gather.css"  	 		rel="stylesheet" type="text/css" >
<link href="tpl/class web/css/photo/photoList.css"  rel="stylesheet" type="text/css" >
<link href="tpl/class web/css/index/header.css"     rel="stylesheet" type="text/css" /><!-- 头部css文件 -->
<link href="tpl/class web/css/index/login.css"      rel="stylesheet" type="text/css" /><!-- 登录注册css文件 -->
<link href="tpl/class web/css/index/footer.css"     rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/photo/photoComment.css"     rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 src="tpl/class web/js/jquery-1.8.2-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="tpl/class web/classPhoto/layer/layer.min.js"><?php echo '</script'; ?>
>


</head>
<body onselectstart="" onload=" waterfall( 'photoBox' , 2 ) "><!-- 调用瀑布流函数 -->

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
						alt="" />
						<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['photoData']->value[$_smarty_tpl->tpl_vars['key']->value]['id'];?>
" /><!-- photo ID -->





					<?php } ?>
					</div>
				</li>
				
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['photoData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<div id="photoComment-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="comment-big-box" style="display:none;"><!--  相册评论快  -->
				<div class="photo-comment">

					<div class="photo-comment-left">

						<div class="photo-comment-box">
							<div class="author-info-box"><!-- 作者信息 -->
								<div class="author-info">
									<div class="comment-author-photo">
										<a href="#">
										<!-- 作者头像 -->
											<img src="pictureGroup/userPhotoFolder/defaultPhoto.jpg"
											width="50" height="50">
										</a>
									</div>
									<div class="author-date-and-username">
										<a href="#">吸收<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<!-- username --></a>
										<span>2015年5月20日<!-- albumDate --></span>
									</div>
								</div>
							</div>

							<div class="operation-bar-box"><!-- 操作栏(如:评论、分享小按钮) -->
								<ul>
									<li class="operation-comment"></li><!-- 评论icon  -->
									<li class="operation-upvote"></li> <!-- 点赞icon -->
									<li class="operation-share"></li>  <!-- 分享icon -->
								</ul>
							</div>

							<div class="comment-content-box">
								<div class="comment-content-all" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">

								<!--ASDASDASDASDSADSA-->	
									<div class="comment-content-block" title="点击回复">
										<div class="comment-content-block-small-box">
										
											<div class="comment-content-block-photo">
												<!-- 评论块头像 -->
												<img src="pictureGroup/userPhotoFolder/defaultPhoto.jpg" 
												width="40" height="40" />
												
											</div>

											<div class="comment-content-block-box">
												
												<span class="comment-content-block-username">
													<a href="#"><!-- 评论username -->刀锋意志:</a>
												</span>
												<span class="comment-content-block-content">
													<!-- 评论内容content -->水水水水群殴水水水水群殴asdasdasd水水水水群殴
													<a href="#" class="comment-content-block-reply-icon"></a>
												</span>


												
											</div>

											<div class="clear"></div>

										</div>

										<div class="comment-content-reply">
											<ul class="reply-list">

												<li><!-- 照片评论回复 -->
													<a href="#">三十</a> 回复 <a href="#">恩德尔</a> :
													你个dog
													<a href="#" class="comment-content-block-reply-icon"></a>
												</li>

												

											</ul>
											<!-- 回复 输入的input -->
											<div class="comment-reply-input-box" style="display:none;">
												<i class="comment-reply-info">
													回复 徐志乔：<!-- 回复对象 -->
												</i>
												<textarea id="tValue" onpropertychange="this.style.height=this.scrollHeight + 'px'" oninput="this.style.height=this.scrollHeight + 'px'" ></textarea>
												<span>回复</span>
											</div>
										</div>

									</div>
								<!-- asdcasdasdasd-->
								



								</div><!-- 评论内容 -->
								
							</div>

							<div class="comment-input-box"><!-- 输入评论的 -->

								<div class="comment-input" style="display:block;">
									<textarea></textarea>
									<span>发表</span>
								</div>

								<div class="login-and-register" style="display:none;">
									<i class="comment-cut-off-rule"></i>
									<i class="message-box">
										<i class="message-login"></i>
										请登录或注册后发表评论
									</i>
									<div class="comment-login">登录</div>
									<div class="comment-register">注册</div>
								</div>

							</div>
						</div>
					</div>

 
					评论块<?php echo $_smarty_tpl->tpl_vars['key']->value;?>



				</div>
			</div>
<?php } ?>


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
 type="text/javascript" src="tpl/class web/js/frontPhotoShow.js?var=2"><?php echo '</script'; ?>
> <!-- 照片展出层 -->
<?php }} ?>
