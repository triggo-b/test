<?php /* Smarty version Smarty-3.1-DEV, created on 2013-12-26 06:48:50
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2501152baae709efd38-72318310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b21611d933b37cf91bc2711657f5d28356baed' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\error\\error.tpl',
      1 => 1387965933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2501152baae709efd38-72318310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52baae70a6505',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52baae70a6505')) {function content_52baae70a6505($_smarty_tpl) {?><h1>n error occurred</h1>


<h2><?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</h2>

  <?php if ($_smarty_tpl->tpl_vars['this']->value->exception) {?>
<h3>
  Exception information:
</h3>


<p>
  <b>Message:</b> <?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getMessage();?>

</p>



<h3>
  Stack trace:
</h3>


<pre><?php echo $_smarty_tpl->tpl_vars['this']->value->exception->getTraceAsString();?>

  </pre>



<h3>
  Request Parameters:
</h3>


<pre><?php echo var_export($_smarty_tpl->tpl_vars['this']->value->request->getParams(),true);?>

  </pre>
  <?php }?><?php }} ?>
