<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-02 12:41:49
         compiled from "tpl\class web\userInfo\userInfoShow.html" */ ?>
<?php /*%%SmartyHeaderCode:11743556d886d3502b7-03672162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f081134be8356e2a6182086a1dafa28fdbc0f735' => 
    array (
      0 => 'tpl\\class web\\userInfo\\userInfoShow.html',
      1 => 1432206756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11743556d886d3502b7-03672162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photo' => 0,
    'introduction' => 0,
    'trueName' => 0,
    'birthday' => 0,
    'phone' => 0,
    'sex' => 0,
    'sexDef' => 0,
    'addressLength' => 0,
    'address' => 0,
    'height' => 0,
    'heightDef' => 0,
    'registerTime' => 0,
    'schoolLength' => 0,
    'school' => 0,
    'power' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556d886d3e8859_56902782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d886d3e8859_56902782')) {function content_556d886d3e8859_56902782($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/userInfo/userInfo.css" rel="stylesheet" type="text/css" />

<?php echo '<script'; ?>
 src="tpl/class web/js/jquery-1.8.2-min.js"><?php echo '</script'; ?>
><!-- 用于 header 的点击后标记 -->

</head>
<body>

	
<?php echo $_smarty_tpl->getSubTemplate ("class web/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="user-info">
	
<!-- 用户信息展示 -->
	<div class="user-info-show">
		
		<div class="show-photo-and-introduction">
			<div class="show-photo"><!-- 头像 -->
				<a href="javascript:void(0)" class="show-photo-a" title="修改头像">
					<img src="./<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" width="120" height="120" />
					<form method="post" action="admin.php?controller=admin&method=changeUserPhoto" enctype="multipart/form-data">
						<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
						<input type="file" name="userPhotoFiles" accept="image/*"
						class="show-photo-input-file" onchange="triggerSubmit()">
						
						<input type="submit" id="submit">
					</form>
				</a>
			</div>
			<div class="show-introduction"><i></i><span><!-- 个人简介 --><?php echo (($tmp = @$_smarty_tpl->tpl_vars['introduction']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
</span></div>
		</div>

		<div class="show-info">
			<ul>
				<li class="show-info-truename border-left-none" title="真实姓名"><i></i>
					<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['trueName']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
</span>
				</li>
				<li class="show-info-birthday" title="生日"><i></i>
					<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['birthday']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
</span>
				</li>
				<li class="show-info-phone" title="手机号码"><i></i>
					<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['phone']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
</span>
				</li>
				<li class="show-info-sex" title="性别"><i></i>
					<span>
						<?php if ($_smarty_tpl->tpl_vars['sex']->value==1) {?>
							<?php echo $_smarty_tpl->tpl_vars['sexDef']->value;?>

						<?php } elseif ($_smarty_tpl->tpl_vars['sex']->value==2) {?>
							<span>女</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['sex']->value==3) {?>
							<span>男</span>
						<?php }?>

					</span>
				</li>
				<li class="show-info-address border-left-none" title="地址"><i></i>
					<span>
						<?php if ($_smarty_tpl->tpl_vars['addressLength']->value<28) {?>
							<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
				
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['addressLength']->value>27) {?>
							<?php echo (substr($_smarty_tpl->tpl_vars['address']->value,"0","27")).("...");?>
		
						<?php }?>

						<?php if (!$_smarty_tpl->tpl_vars['address']->value) {?>
							<?php echo (($tmp = @$_smarty_tpl->tpl_vars['address']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
			
						<?php }?>
					</span>
				</li>
				<li class="show-info-height" title="身高"><i></i>
					<span>
						<?php if ($_smarty_tpl->tpl_vars['height']->value==0) {?>
								<?php echo $_smarty_tpl->tpl_vars['heightDef']->value;?>

						<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['height']->value;?>

						<?php }?>

					</span>
				</li>
				<li class="show-info-registertime" title="注册时间"><i></i>
					<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['registerTime']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
</span>
				</li>
				<li class="show-info-school" title="学校"><i></i>
					<span>
					
						<?php if ($_smarty_tpl->tpl_vars['schoolLength']->value<25) {?>
							<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
				
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['schoolLength']->value>24) {?>
							<?php echo (substr($_smarty_tpl->tpl_vars['school']->value,"0","24")).("...");?>
		
						<?php }?>

						<?php if (!$_smarty_tpl->tpl_vars['school']->value) {?>
							<?php echo (($tmp = @$_smarty_tpl->tpl_vars['school']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
			
						<?php }?>
					</span>
				</li>
			</ul>
		</div>

		<div class="show-change-info-frame">
			<div class="change-btn" onclick="changeUserInfoBtn();"></div>
		</div>
	</div>


<!-- 用户信息修改 -->
	<div class="user-info-change">
		<form>	
			<ul class="userInfo-change">			
				<li>
					<span>真实姓名:</span>
					<input type="text" name="" value=""  disabled="disabled"/>
				</li>

				<li>
					<span>手机号码:</span>
					<input type="text" name="" value=""  disabled="disabled"/>
				</li>

				<li>
					<span>出生年月:</span>

					<select disabled="disabled"></select>
					<select disabled="disabled"></select>
					<select disabled="disabled"></select>

				</li>

				<li>
					<span class="sex-span">性别:</span>
					
	
					<input type="radio" name="sex" disabled="disabled" class="sex-man" />
					<span class="span-man">男</span>
					<input type="radio" name="sex" disabled="disabled" class="sex-woman" />
					<span class="span-woman">女</span>
					<input type="radio" name="sex" disabled="disabled"/>
					<span class="span-secrecy">保密</span>
				</li>

				<li>
					<span class="height-span">身高:</span>
					<input type="text" name="" value=""  class="height" disabled="disabled"/>
				</li>

				<li>
					<span class="school-span">学校:</span>
					<input type="text" name="" value=""  class="school" disabled="disabled"/>
				</li>

				<li>
					<span  class="address-span">地址:</span>
					<input type="text" name="" value="" class="address"  disabled="disabled"/>
				</li>

				<li>
					<span class="introduction-span">个人简介:</span>
					<textarea rows="10" cols="60" class="introduction" disabled="disabled"></textarea>
				</li>
				
				

			</ul>
		</form>
	</div>

</div>

<?php if ($_smarty_tpl->tpl_vars['power']->value==2) {?>
		<h2><a href="admin.php?controller=back&method=backIndex">进入后台管理中心</a></h2>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<?php if ($_smarty_tpl->tpl_vars['userName']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel  = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');

		loginModel.style.display = "none";
		userUserName.style.display = "block";
	<?php echo '</script'; ?>
>
<?php } else { ?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var loginModel  = document.getElementById('loginModel');
		var userUserName  = document.getElementById('userUserName');

		loginModel.style.display = "block";
		userUserName.style.display = "none";
	<?php echo '</script'; ?>
>
<?php }?>

</body>
</html>

	
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/js.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userPhoto.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="tpl/class web/js/userInfo.js"><?php echo '</script'; ?>
>
<?php }} ?>
