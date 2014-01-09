<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 10:42:23
         compiled from "C:\Users\savrasov.boris\project\zendajax\application\modules\default\views\templates\weather\displayweather.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1697552ce7d0f5fb5b5-51284380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fdffe7b1cb20822d0a04057a5bb7b1670e6b6cc' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\zendajax\\application\\modules\\default\\views\\templates\\weather\\displayweather.tpl',
      1 => 1389263633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1697552ce7d0f5fb5b5-51284380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ownCity' => 0,
    'pressure' => 0,
    'windSpeed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52ce7d0f65d054_32031389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7d0f65d054_32031389')) {function content_52ce7d0f65d054_32031389($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['ownCity']->value;?>
</h3>
<p>
	Давление: <?php echo $_smarty_tpl->tpl_vars['pressure']->value;?>

</p>
<p>
	Скорость ветра: <?php echo $_smarty_tpl->tpl_vars['windSpeed']->value;?>

</p><?php }} ?>
