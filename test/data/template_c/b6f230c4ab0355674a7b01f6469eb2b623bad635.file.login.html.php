<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-31 13:36:28
         compiled from "tpl\class web\index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:25503551a86bce74620-68834801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f230c4ab0355674a7b01f6469eb2b623bad635' => 
    array (
      0 => 'tpl\\class web\\index\\login.html',
      1 => 1426745166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25503551a86bce74620-68834801',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551a86bce784a5_04697149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551a86bce784a5_04697149')) {function content_551a86bce784a5_04697149($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>登录、注册</title>
</head>

<body  onselectstart="return false;">
	
	<div class="ui-dialog" id="dialog">
		<div class="ui-dialog-title" id="dialogTitle">
        	<a href="javascript:hideDialog();" class="ui-dialog-title-closebutton"></a>
        	<h1>用户登录</h1>
            <i class="cut-off-rule"></i>
        </div>
		<div class="ui-dialog-content">
        	<form method="post" class="ui-dialog-form" action="http://localhost/test/admin.php?controller=admin&method=login">
            	<input type="text" name="username" id="" class="" placeholder="请输入用户名"/>
                <input type="password" name="password" id="" class="" placeholder="请输入密码"/><br/>
                <input type="checkbox" name="remPass" id="ui-dialog-content-checkbox"  class="" />
                <label for="ui-dialog-content-checkbox" onselectstart="return false;">记住密码(一周内有效)</label>
                <a href="#"> 忘记密码？</a><br/>
                <input type="submit" name="submit" id="" class=""  value=""/>
            </form>	
        </div>
	</div>
	
	<div class="ui-dialog-register" id="dialog-register" >
		<a href="javascript:RhideDialog();" class="ui-dialog-register-title-closebutton"></a>
		<div class="ui-dialog-register-title-line"></div>
		<div class="ui-dialog-register-title" id="dialogTitle-register"><span>注册用户</span></div>
		<div class="ui-dialog-register--title-cut-off-rule"></div>
		<div class="ui-dialog-register-content">
			<form name="regForm" method="post" class="ui-dialog-register-form" id="registerForm" action="http://localhost/test/admin.php?controller=admin&method=register" onsubmit="return checkInput()">
              
                <input type="text" name="r_username" id="r_username" class="" placeholder="用户名" tabIndex="3"/>
                <i id="userErrorPrompt"><img src="tpl/class web/images/login/userErrorPrompt.png" /></i>
                <i id="userOk"><img src="tpl/class web/images/login/ok.png" /></i>
                
                <input type="password" name="r_password" id="r_password" class="" placeholder="密码"/>
                <i id="passFormatError"><img src="tpl/class web/images/login/passFormatError.png" /></i>
                <i id="pasOk"><img src="tpl/class web/images/login/ok.png" /></i>
               
                <input type="password" name="r_passwordTwo" id="r_passwordTwo" class="" placeholder="确认密码"/>
                <i id="passErrorPrompt"><img src="tpl/class web/images/login/passErrorPrompt.png"/></i>
                <i id="inconsistentPassword"><img src="tpl/class web/images/login/inconsistentPassword.png" /></i>
                <i id="twoPasOk"><img src="tpl/class web/images/login/ok.png" /></i>
                
                <input type="text" name="r_truename" id="r_truename" class="" placeholder="真实姓名"/>
                <i id="trueNameErrorPrompt"><img src="tpl/class web/images/login/trueNameErrorPrompt.png" /></i>
                <i id="trueNameFormatError"><img src="tpl/class web/images/login/trueNameFormatError.png" /></i>
                <i id="emailOk"><img src="tpl/class web/images/login/ok.png" /></i> 	<br/>
                
                <input type="checkbox" name="" id="ui-dialog-register-form-check" class="" value="1">
                <label class="ui-dialog-register-form-text" for="ui-dialog-register-form-check">
                    我同意《<a href="#">用户协议</a>》中的条款
                </label>
                <input type="submit" name="r_submit" id="r_submit" class="" value="" />
			</form>
		</div>
	</div>
	<div class="ui-mask" id="mask" onselectstart="return false"></div>
</body>
</html>

<?php }} ?>
