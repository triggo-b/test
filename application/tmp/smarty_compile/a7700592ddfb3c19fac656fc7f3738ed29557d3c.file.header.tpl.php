<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 10:41:59
         compiled from "C:\Users\savrasov.boris\project\zendajax\application\modules\default\views\templates\static\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21452ce7cf7857675-32017216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7700592ddfb3c19fac656fc7f3738ed29557d3c' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\zendajax\\application\\modules\\default\\views\\templates\\static\\header.tpl',
      1 => 1389263633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21452ce7cf7857675-32017216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52ce7cf78b9113_68185252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce7cf78b9113_68185252')) {function content_52ce7cf78b9113_68185252($_smarty_tpl) {?><!DOCTYPE html>
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
