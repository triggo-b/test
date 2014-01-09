<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 11:07:26
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\weather\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892552bbe8b83aecd7-86270870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '761ea85126f09b050960c5d16ab3438d72440e44' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\weather\\index.tpl',
      1 => 1389262554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892552bbe8b83aecd7-86270870',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52bbe8b83ddad2_43533908',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbe8b83ddad2_43533908')) {function content_52bbe8b83ddad2_43533908($_smarty_tpl) {?><h3>Сервис прогноза погоды</h3>
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
