<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 09:02:25
         compiled from "tpl\backstage\photo\photo\photo.html" */ ?>
<?php /*%%SmartyHeaderCode:21454551e3b01004ad4-15726699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3dcaac75af27dbfc300dd87fba7b42027572b2f' => 
    array (
      0 => 'tpl\\backstage\\photo\\photo\\photo.html',
      1 => 1427983209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21454551e3b01004ad4-15726699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e3b01023ee3_73004754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e3b01023ee3_73004754')) {function content_551e3b01023ee3_73004754($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh_cn" lang="zh_cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>多文件上传组件</title>
</head>
<body bgcolor="#ffffff" style="text-align:center;">

  <!--影片中使用的 URL-->
  <!--影片中使用的文本-->
  <!-- saved from url=(0013)about:internet -->
<?php echo '<script'; ?>
 language="javascript" src="temp2js.js"><?php echo '</script'; ?>
>
<p><a href="temp.html">列表模式</a></p>
这个选择框的数据将以POST形式和图片一起传送到服务器
  <select id="select">
    <option value="老虎">老虎</option>
    <option value="兔子">兔子</option>
    <option value="骏马">骏马</option>
    </select>
    <select id="select2">
      <option value="石头">石头</option>
      <option value="剪子">剪子</option>
      <option value="布">布</option>
      </select>
    <br>
    <br>
  改变窗口：高

<label>
      ：
      <input name="gao" type="text" id="gao" value="900" size="5">
      宽：
      </label>
      <label>
      <input name="kuan" type="text" id="kuan" value="900" size="5">　
      </label>
      <label>
      <input type="submit" name="button" id="button" value="　修　改　" onClick="thisMovie('update').width=document.getElementById('kuan').value;thisMovie('update').height=document.getElementById('gao').value;">
      </label>
      <br>
<br>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=11,0,0,0" width="900" height="900" id="update" align="middle">
<param name="allowFullScreen" value="false" />
    <param name="allowScriptAccess" value="always" />
	<param name="movie" value="update.swf" />
    <param name="quality" value="high" />
    <param name="bgcolor" value="#ffffff" />
    <embed src="update.swf" quality="high" bgcolor="#ffffff" width="900" height="900" name="update" align="middle" allowScriptAccess="always" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
<div id="show" style="margin-top:20px; width:500px; text-align:left;"></div>
</body>
</html>
<?php }} ?>
