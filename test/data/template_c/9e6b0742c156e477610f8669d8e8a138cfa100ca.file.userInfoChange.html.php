<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-23 13:20:46
         compiled from "tpl\class web\userInfo\userInfoChange.html" */ ?>
<?php /*%%SmartyHeaderCode:257795538d46f24c2f1-57140870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e6b0742c156e477610f8669d8e8a138cfa100ca' => 
    array (
      0 => 'tpl\\class web\\userInfo\\userInfoChange.html',
      1 => 1429788043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257795538d46f24c2f1-57140870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5538d46f2cd181_74873837',
  'variables' => 
  array (
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
    'school' => 0,
    'power' => 0,
    'userName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5538d46f2cd181_74873837')) {function content_5538d46f2cd181_74873837($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link href="tpl/class web/css/gather.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/header.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/index/login.css"  rel="stylesheet" type="text/css" /> 
<link href="tpl/class web/css/index/footer.css" rel="stylesheet" type="text/css" />
<link href="tpl/class web/css/userInfo/userInfo.css" rel="stylesheet" type="text/css" />

</head>
<body>

	
<?php echo $_smarty_tpl->getSubTemplate ("class web/index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("class web/index/login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="user-info">
	
<!-- 用户信息展示 -->
	<div class="user-info-show">
		
		<div class="show-photo-and-introduction">
			<div class="show-photo"><!-- 头像 --></div>
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
					<span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['school']->value)===null||$tmp==='' ? "暂无" : $tmp);?>
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
		<form method="post" action="admin.php?controller=admin&method=userInfoChangeWork">	
			<ul class="userInfo-change">			
				<li>
					<span>真实姓名:</span>
					<input type="text" name="trueName" id="trueName" value="<?php echo $_smarty_tpl->tpl_vars['trueName']->value;?>
" />
				</li>

				<li>
					<span>手机号码:</span>
					<input type="text" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/>
				</li>

				<li>
					<span>出生年月:</span>

					<!-- 生日隐藏域 -->
				
					<input type="hidden"  id="yearHidd"  value="<?php echo substr($_smarty_tpl->tpl_vars['birthday']->value,0,4);?>
" />
					<input type="hidden"  id="monthHidd" value="<?php echo substr($_smarty_tpl->tpl_vars['birthday']->value,5,2);?>
" />
					<input type="hidden"  id="dayHidd"   value="<?php echo substr($_smarty_tpl->tpl_vars['birthday']->value,8,2);?>
" />

					<select id="year" name="year" style="background:#fff;"></select>
					<select id="month"  name="month" style="background:#fff;"></select>
					<select id="day" name="day"  style="background:#fff;"></select>
				

					

				</li>

				<li>
					<span class="sex-span">性别:</span>
					
				
					
					<input type="hidden" id="sexHidd" value="<?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
" />

					<input type="radio" id="man" name="sex"  value="3" class="sex-man" /><span>男</span>
					<input type="radio" id="woman" name="sex" value="2" class="sex-woman" /><span>女</span>
					<input type="radio" id="secrecy" name="sex" value="1" /><span>保密</span>
				
					
				</li>

				<li>
					<span class="height-span">身高:</span>
					<input type="text" name="height" value="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" id="height"  class="height" />
				</li>

				<li>
					<span  class="address-span">地址:</span>
					<input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" id="address" class="address" />
				</li>

				<li>
					<span class="introduction-span">个人简介:</span>
					
					<textarea rows="10" cols="60" class="introduction" id="introduction" name="introduction"><?php echo $_smarty_tpl->tpl_vars['introduction']->value;?>
</textarea>
				</li>
				
				<li>
					<div class="goback" onclick="goBack();">返回</div>
					<input type="submit" value="修改" onclick="checkUserInfoChange();" class="change"/>

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
<?php echo '<script'; ?>
 type="text/javascript">
	createOption();
	birthdayValue();
	sexValue();
	a();
<?php echo '</script'; ?>
>
<?php }} ?>
