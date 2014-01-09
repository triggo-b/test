<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 10:42:19
         compiled from "C:\Users\savrasov.boris\project\zendajax\application\modules\default\views\templates\weather\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3121952ce7d0b231a81-33242737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '495115e677d4eb1fec4b8eef56321a1f21571696' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\zendajax\\application\\modules\\default\\views\\templates\\weather\\index.tpl',
      1 => 1389263633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3121952ce7d0b231a81-33242737',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52ce7d0b264712_54988820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7d0b264712_54988820')) {function content_52ce7d0b264712_54988820($_smarty_tpl) {?><h3>Сервис прогноза погоды</h3>
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
