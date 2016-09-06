<?php /* Smarty version Smarty-3.1.6, created on 2016-08-29 17:16:28
         compiled from "../views/frontend\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130245624d3de604b09-31269147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b92783b9a969c9315d68a13a1e1bef6146a83f90' => 
    array (
      0 => '../views/frontend\\header.tpl',
      1 => 1472819316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130245624d3de604b09-31269147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d3de80610',
  'variables' => 
  array (
    'lang' => 0,
    'keywords_ru' => 0,
    'keywords_en' => 0,
    'descr_ru' => 0,
    'descr_en' => 0,
    'ss_sitename' => 0,
    'title_ru' => 0,
    'title_en' => 0,
    'templateWebPath' => 0,
    'ss_vk_group_id' => 0,
    'ss_vk_appid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d3de80610')) {function content_5624d3de80610($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['keywords_ru']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['keywords_en']->value;?>
<?php }?>">
	<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['descr_ru']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['descr_en']->value;?>
<?php }?>">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $_smarty_tpl->tpl_vars['ss_sitename']->value;?>
 | <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['title_ru']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['title_en']->value;?>
<?php }?></title>

    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/add.css" rel="stylesheet">
	<link href="/templates/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://vk.com/js/api/openapi.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <input id="vkgid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ss_vk_group_id']->value;?>
" />
  <input id="vkappid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ss_vk_appid']->value;?>
" /><?php }} ?>