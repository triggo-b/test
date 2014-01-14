<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-14 14:04:43
         compiled from "C:\Users\savrasov.boris\project\test\application\modules\default\views\templates\login\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3154852d5256f0b7038-27074981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '266a3ddad2dea52e6dc6929979a52e38ee951383' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\test\\application\\modules\\default\\views\\templates\\login\\index.tpl',
      1 => 1389708096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3154852d5256f0b7038-27074981',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d5256f0f19c9_14359790',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5256f0f19c9_14359790')) {function content_52d5256f0f19c9_14359790($_smarty_tpl) {?><div>
    <form class="modal-form" id="authForm" name="authForm" method="POST">
        <label>Имя пользователя</label>
            <input type="text" name="login">
        <label>Пароль</label>
            <input type="password" name="passwd">
        <div>
            <input class="btn btn-small btn-primary" type="submit" value="Let's GO">
        </div>
    </form>
</div><?php }} ?>
