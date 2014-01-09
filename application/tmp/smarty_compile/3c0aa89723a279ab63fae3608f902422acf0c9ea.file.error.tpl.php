<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 10:42:14
         compiled from "C:\Users\savrasov.boris\project\zendajax\application\modules\default\views\templates\error\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1082052ce7d06bf0c71-34816403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c0aa89723a279ab63fae3608f902422acf0c9ea' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\zendajax\\application\\modules\\default\\views\\templates\\error\\error.tpl',
      1 => 1389263633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082052ce7d06bf0c71-34816403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52ce7d06c75995_45098836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7d06c75995_45098836')) {function content_52ce7d06c75995_45098836($_smarty_tpl) {?><h1>n error occurred</h1>


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
