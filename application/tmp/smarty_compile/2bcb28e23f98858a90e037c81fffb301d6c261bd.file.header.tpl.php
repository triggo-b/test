<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-13 14:53:49
         compiled from "C:\Users\savrasov.boris\project\test\application\modules\default\views\templates\static\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1518252d3d8de9850d3-79533327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bcb28e23f98858a90e037c81fffb301d6c261bd' => 
    array (
      0 => 'C:\\Users\\savrasov.boris\\project\\test\\application\\modules\\default\\views\\templates\\static\\header.tpl',
      1 => 1389624827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518252d3d8de9850d3-79533327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d3d8dea3ca86_67006868',
  'variables' => 
  array (
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d3d8dea3ca86_67006868')) {function content_52d3d8dea3ca86_67006868($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle("Мой сайт");?>

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headLink()->appendStylesheet($_smarty_tpl->tpl_vars['this']->value->baseUrl('/css/bootstrap.css'));?>

	<?php echo $_smarty_tpl->tpl_vars['this']->value->headScript()->appendFile('//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js')->headScript()->appendFile($_smarty_tpl->tpl_vars['this']->value->baseUrl('/js/bootstrap.js'))->headScript()->appendFile($_smarty_tpl->tpl_vars['this']->value->baseUrl('/js/myDefault.js'));?>

	<meta charset="utf8">
</head>
<body>
	<div class="container">
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="http://test/">Home</a>
            <ul class="nav">
              <li><a href="weather">Прогноз погоды</a></li>
              <li><a href="user">Пользователь</a></li>
            </ul>
          </div>
        </div>
	</div><?php }} ?>
