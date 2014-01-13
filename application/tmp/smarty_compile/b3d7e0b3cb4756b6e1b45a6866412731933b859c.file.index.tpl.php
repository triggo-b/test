<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-13 12:15:37
         compiled from "C:\Users\savrasov.boris\project\test\application\modules\default\views\templates\weather\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:843252d3d8e99cdd34-42102695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3d7e0b3cb4756b6e1b45a6866412731933b859c' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\test\\application\\modules\\default\\views\\templates\\weather\\index.tpl',
      1 => 1389615029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '843252d3d8e99cdd34-42102695',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d3d8e99fcb41_57614750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3d8e99fcb41_57614750')) {function content_52d3d8e99fcb41_57614750($_smarty_tpl) {?><h3>Сервис прогноза погоды</h3>
<form name="myForm" id="myForm" method="GET">
	<div class="span4">
		<input type="text" name="city" id="city">
		
		<div class="form-group">
			<input class="btn btn-large btn-primary" id="buttona" type="submit" value="Показать данные">
		</div>
	</div>
	
	<div class="span4" id="wInfo">
		
	</div>
</form><?php }} ?>
