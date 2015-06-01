<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-01 04:17:13
         compiled from "tpl\backstage\user\userInfoChange.html" */ ?>
<?php /*%%SmartyHeaderCode:5869556bc0a94596a9-81560840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f817247a5fa6d02734267a47abd7182d1b32b9' => 
    array (
      0 => 'tpl\\backstage\\user\\userInfoChange.html',
      1 => 1432618245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5869556bc0a94596a9-81560840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556bc0a94eddc9_09872754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556bc0a94eddc9_09872754')) {function content_556bc0a94eddc9_09872754($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="tpl/backstage/user/style/userInfoChange.css">
<link rel="stylesheet" type="text/css" href="tpl/backstage/css/gather.css">

</head>
<body>

<div class="add-common-frame">用户资料修改</div>	

<div class="userInfoBox">
	<form method="post" action="admin.php?controller=back&method=userDetailsOk&id=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
">
	<table class="userInfoTable"  cellspacing="0">
		<tr><!-- 用户名 -->
			<td><span>用户名</span></td>
			<td><span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['userName'];?>
</span></td>
		</tr>
		<tr><!-- 姓名 -->
			<td><span>真实姓名</span></td>
			<td><span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['trueName'];?>
</span></td>	
		</tr>

		<tr><!-- 生日 -->
			<td><span>生日</span></td>
			
				<input type="hidden"  id="yearHidd"  value="<?php echo substr($_smarty_tpl->tpl_vars['userInfo']->value['birthday'],0,4);?>
" />
				<input type="hidden"  id="monthHidd" value="<?php echo substr($_smarty_tpl->tpl_vars['userInfo']->value['birthday'],5,2);?>
" />
				<input type="hidden"  id="dayHidd"   value="<?php echo substr($_smarty_tpl->tpl_vars['userInfo']->value['birthday'],8,2);?>
" />
			

			<td>
				<select id="year" name="year">
					<option>请选择</option>
				</select>

				<select id="month" name="month">
					<option>请选择</option>
				</select>

				<select id="day" name="day">
					<option>请选择</option>
				</select>
			</td>
				
				<input type="hidden" name="birthday" id="postBirthday" value="" />
		</tr>

 		<tr><!-- 手机号码 -->
			<td><span>手机号码</span></td>
			<td><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['phone'];?>
" /></td>
		</tr>

		<tr><!-- 性别 -->
			<td><span>性别</span></td>
				<input type="hidden" id="sexHidd"   value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['sex'];?>
" />
			<td>				
				男<input type="radio" name="sex" id="man" value="3" />&nbsp;
				女<input type="radio" name="sex" id="woman" value="2" />&nbsp;
				保密<input type="radio" name="sex" id="secrecy" value="1" />&nbsp;
			</td>	
		</tr>
			
		<tr><!-- 地址 -->
			<td><span>地址</span></td>
			<td><input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
" /></td>
		</tr>

		<tr><!-- 身高 -->
			<td><span>身高</span></td>
			<td><input type="text" name="height" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['height'];?>
"  /></td>
		</tr>
		<tr><!-- 个人简介 -->
			<td><span>个人简介</span></td>
			<td><textarea rows='10' cols="50" class="userIntroduction" name="introduction"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['introduction'];?>
</textarea></td>
		</tr>
		<tr><!-- 注册时间 -->
			<td><span>注册时间</span></td>
			<td><span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['registerTime'];?>
</span></td>
		</tr>
		
		<tr><!-- 操作按钮 -->
			<td><input type="submit" name="userInfoChange" class="artAddsubmit" value="修改" /></td>
			<td>
				<input type="button" class="artAddGoBack"
				onclick="javascript:window.location='admin.php?controller=back&method=userList';" value="返回" />
			</td>
		</tr>

		</table>
	</form>
</div>

</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js?ver=1"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

//  创建下拉框
	createOption();

//  根据数据库给的生日,选择好下拉框
	birthdayValue();

//  根据数据库给的性别代表值,选择好单选框
	sexValue();
	

<?php echo '</script'; ?>
><?php }} ?>
