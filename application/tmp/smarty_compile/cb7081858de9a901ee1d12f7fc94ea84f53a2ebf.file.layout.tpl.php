<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 10:41:59
         compiled from "C:\Users\savrasov.boris\project\zendajax\application\modules\default\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2788952ce7cf7830570-49334678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7081858de9a901ee1d12f7fc94ea84f53a2ebf' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\zendajax\\application\\modules\\default\\views\\templates\\layout.tpl',
      1 => 1389263633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2788952ce7cf7830570-49334678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52ce7cf784f977_59224716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7cf784f977_59224716')) {function content_52ce7cf784f977_59224716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

</div><?php }} ?>
