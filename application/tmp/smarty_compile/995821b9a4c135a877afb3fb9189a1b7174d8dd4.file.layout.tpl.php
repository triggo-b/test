<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-13 12:15:26
         compiled from "C:\Users\savrasov.boris\project\test\application\modules\default\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:980152d3d8de90fdb0-95335511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995821b9a4c135a877afb3fb9189a1b7174d8dd4' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\test\\application\\modules\\default\\views\\templates\\layout.tpl',
      1 => 1389615029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980152d3d8de90fdb0-95335511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d3d8de979557_36814688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3d8de979557_36814688')) {function content_52d3d8de979557_36814688($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

</div><?php }} ?>
