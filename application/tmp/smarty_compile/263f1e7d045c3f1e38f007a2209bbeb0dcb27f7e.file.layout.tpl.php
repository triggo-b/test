<?php /* Smarty version Smarty-3.1-DEV, created on 2013-12-30 12:58:39
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:638152baae0f409c99-87565688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '263f1e7d045c3f1e38f007a2209bbeb0dcb27f7e' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\layout.tpl',
      1 => 1388408316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '638152baae0f409c99-87565688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52baae0f42522',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baae0f42522')) {function content_52baae0f42522($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->layout()->content;?>

</div><?php }} ?>
