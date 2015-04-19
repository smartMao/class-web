<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-11 11:45:03
         compiled from "tpl\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:425654afebda389141-74708958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8822c8b3178a11dbfe1efc1407fde9085112349e' => 
    array (
      0 => 'tpl\\test.tpl',
      1 => 1420951352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425654afebda389141-74708958',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54afebda4504f4_30852789',
  'variables' => 
  array (
    'articletitle' => 0,
    'arr' => 0,
    'mao' => 0,
    'time' => 0,
    'url' => 0,
    'name' => 0,
    'score' => 0,
    'info' => 0,
    'article' => 0,
    'myobj' => 0,
    'str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54afebda4504f4_30852789')) {function content_54afebda4504f4_30852789($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\www\\smarty\\smarty\\plugins\\modifier.date_format.php';
?>
<?php echo $_smarty_tpl->tpl_vars['articletitle']->value;?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<?php echo ($_smarty_tpl->tpl_vars['arr']->value['title']).("猫的");?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['mao']->value)===null||$tmp==='' ? "aa" : $tmp);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"Y:m:d H:i:s");?>

<br/>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['url']->value);?>

<br/>
<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['name']->value, 'UTF-8');?>

<br/>
<?php if ($_smarty_tpl->tpl_vars['score']->value>60) {?>
	及格
<?php } else { ?>
	不及格
<?php }?>
<br/>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['info']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
	<?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>

	<?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>

	<?php echo $_smarty_tpl->tpl_vars['info']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>


<br/>
<?php endfor; endif; ?>
<br/>
<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

	<?php echo $_smarty_tpl->tpl_vars['article']->value['name'];?>

	<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

<br/>
<?php }
if (!$_smarty_tpl->tpl_vars['article']->_loop) {
?>
	当前没有文章

<?php } ?>
<br/>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('title'=>"网站标题",'table_color'=>"#c0c0c0"), 0);?>

<br/>
<?php echo $_smarty_tpl->tpl_vars['myobj']->value->meth1(array('苹果','熟了'));?>

<br/>
<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['time']->value);?>

<br/>
<?php echo str_replace('v','c',$_smarty_tpl->tpl_vars['str']->value);?>

<br/>
<?php echo test(array('p1'=>'aa','p2'=>'bb'),$_smarty_tpl);?>

<?php }} ?>
