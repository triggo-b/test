<?php /* Smarty version Smarty-3.1-DEV, created on 2013-12-30 11:53:43
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\weather\displayweather.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584652bc1302156115-65653577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dfecef173cc4b59bdda32a981b1e6f12491a8bd' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\weather\\displayweather.tpl',
      1 => 1388404420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584652bc1302156115-65653577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52bc13021ac023_37593529',
  'variables' => 
  array (
    'ownCity' => 0,
    'pressure' => 0,
    'windSpeed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bc13021ac023_37593529')) {function content_52bc13021ac023_37593529($_smarty_tpl) {?><h3><?php echo $_smarty_tpl->tpl_vars['ownCity']->value;?>
</h3>
<p>
	Давление: <?php echo $_smarty_tpl->tpl_vars['pressure']->value;?>

</p>
<p>
	Скорость ветра: <?php echo $_smarty_tpl->tpl_vars['windSpeed']->value;?>

</p><?php }} ?>
