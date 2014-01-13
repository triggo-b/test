<?php /* Smarty version Smarty-3.1-DEV, created on 2013-12-30 13:13:31
         compiled from "C:\Users\savrasov.boris\project\deff\application\modules\default\views\templates\static\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214252badf84834e91-37052963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7919d440bf3e0df67005d384d87dd50b8018d1e6' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\deff\\application\\modules\\default\\views\\templates\\static\\header.tpl',
      1 => 1388409162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214252badf84834e91-37052963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52badf84838d17_01068508',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52badf84838d17_01068508')) {function content_52badf84838d17_01068508($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle("Мой сайт");?>

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headLink()->appendStylesheet($_smarty_tpl->tpl_vars['this']->value->baseUrl('/css/bootstrap.css'));?>

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headScript()->appendFile('//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');?>

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headScript()->appendFile($_smarty_tpl->tpl_vars['this']->value->baseUrl('/js/bootstrap.js'));?>

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headScript()->appendFile($_smarty_tpl->tpl_vars['this']->value->baseUrl('/js/myDefault.js'));?>

	<meta charset="utf8">
</head>
<body>
	<div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="http://deff/">Home</a>
            <ul class="nav">
              <li><a href="weather">Прогноз погоды</a></li>
            </ul>
          </div>
        </div>
	</div><?php }} ?>
