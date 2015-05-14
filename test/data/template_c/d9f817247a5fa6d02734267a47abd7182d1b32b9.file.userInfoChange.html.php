<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-13 13:03:18
         compiled from "tpl\backstage\user\userInfoChange.html" */ ?>
<?php /*%%SmartyHeaderCode:2097555532f767df109-23468197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f817247a5fa6d02734267a47abd7182d1b32b9' => 
    array (
      0 => 'tpl\\backstage\\user\\userInfoChange.html',
      1 => 1429714272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2097555532f767df109-23468197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55532f7686bb29_48243689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55532f7686bb29_48243689')) {function content_55532f7686bb29_48243689($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="admin.php?controller=back&method=userDetailsOk&id=<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['id'];?>
">
		<span>用户名:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['userName'];?>
</span>
	<br/>

	<span>真实姓名:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['trueName'];?>
</span>	
	<br/>

	<span>生日:</span>

	<input type="hidden"  id="yearHidd"  value="<?php echo substr($_smarty_tpl->tpl_vars['userInfo']->value['birthday'],0,4);?>
" />
	<input type="hidden"  id="monthHidd" value="<?php echo substr($_smarty_tpl->tpl_vars['userInfo']->value['birthday'],5,2);?>
" />
	<input type="hidden"  id="dayHidd"   value="<?php echo substr($_smarty_tpl->tpl_vars['userInfo']->value['birthday'],8,2);?>
" />

	<select id="year" name="year">
		<option>请选择</option>
	</select>

	<select id="month" name="month">
		<option>请选择</option>
	</select>

	<select id="day" name="day">
		<option>请选择</option>
	</select>
	
	<input type="hidden" name="birthday" id="postBirthday" value="" />

	<br/>


	<span>手机号码:</span>
	<input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['phone'];?>
" />
	<br/>

	<span>性别:</span>		
	<input type="hidden" id="sexHidd"   value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['sex'];?>
" />
	男<input type="radio" name="sex" id="man" value="3" />
	女<input type="radio" name="sex" id="woman" value="2" />
	保密<input type="radio" name="sex" id="secrecy" value="1" />
	<br/>

	<span>地址:</span>	
	<input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
" />
	<br/>

	<span>身高:</span>	
	<input type="text" name="height" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['height'];?>
"  />
	<br/>

	<span>个人简介:</span>
	<textarea rows='10' cols="50" name="introduction"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['introduction'];?>
</textarea>
	<br/>

	<span>注册时间:</span>
	<span><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['registerTime'];?>
</span>	
	<br/>

	<input type="submit" name="userInfoChange" value="修改" /> 
	

	</form>
	<button onclick="goBack()">返回</button>
</body>
</html>

<?php echo '<script'; ?>
 type="text/javascript" src="tpl/backstage/js/common.js"><?php echo '</script'; ?>
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
