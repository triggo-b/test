<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-14 08:36:07
         compiled from "C:\Users\savrasov.boris\project\test\application\modules\default\views\templates\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1427852d3dfc688f6d8-86255325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bacf171666427bc91e073cf84964ec2e34297eed' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\test\\application\\modules\\default\\views\\templates\\user\\index.tpl',
      1 => 1389688567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1427852d3dfc688f6d8-86255325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d3dfc68ca063_90607420',
  'variables' => 
  array (
    'userHello' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3dfc68ca063_90607420')) {function content_52d3dfc68ca063_90607420($_smarty_tpl) {?><p><?php echo $_smarty_tpl->tpl_vars['userHello']->value;?>
</p>
<div>
    <form class="form-inline" id="userForm">
        <label>Имя пользователя</label>
        <input type="text" name="username">
        <input class="btn btn-small btn-primary" type="submit" value="Let's GO">
    </form>
</div><?php }} ?>
