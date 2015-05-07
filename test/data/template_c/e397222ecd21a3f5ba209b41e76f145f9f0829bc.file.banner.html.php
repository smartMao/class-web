<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-07 02:35:01
         compiled from "tpl\class web\index\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:16904554ab335a0c9d7-57425639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e397222ecd21a3f5ba209b41e76f145f9f0829bc' => 
    array (
      0 => 'tpl\\class web\\index\\banner.html',
      1 => 1429714272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16904554ab335a0c9d7-57425639',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554ab335a0c9d9_52148808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554ab335a0c9d9_52148808')) {function content_554ab335a0c9d9_52148808($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>焦点轮播图</title>
    
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/dome.js"><?php echo '</script'; ?>
>-->

</head>
<body>

<div id="container">
    <div id="list" style="left: -950px;">
    	<img src="tpl/class web/images/banner/03.jpg" alt="1" />
		<img src="tpl/class web/images/banner/01.jpg" alt="1" />
        <img src="tpl/class web/images/banner/02.jpg" alt="2" />
        <img src="tpl/class web/images/banner/03.jpg" alt="3" />
        <img src="tpl/class web/images/banner/01.jpg" alt="3" />
    </div>
    <div id="buttons">
        <span index="1" class="on"></span>
        <span index="2"></span>
        <span index="3"></span>
    </div>
    <a href="javascript:;" id="prev" class="arrow">&lt;</a>
    <a href="javascript:;" id="next" class="arrow">&gt;</a>
</div>

</body>
</html><?php }} ?>
