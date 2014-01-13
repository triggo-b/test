<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-13 13:20:50
         compiled from "C:\Users\savrasov.boris\project\test\application\modules\default\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062152d3e83278aee2-43794620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b3ee05fd737f9b53ead714614bcf408ddfd151' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\test\\application\\modules\\default\\views\\templates\\error\\error.tpl',
      1 => 1389615029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062152d3e83278aee2-43794620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d3e83287d217_33872829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3e83287d217_33872829')) {function content_52d3e83287d217_33872829($_smarty_tpl) {?><h1>n error occurred</h1>


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
