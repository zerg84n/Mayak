<?php /* Smarty version Smarty-3.1.6, created on 2015-09-23 16:47:04
         compiled from "../views/frontend/auth.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197513827356028f2dc99ac7-44199593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0284f6ac6e441ba70d1e9375d13fff05ce7ee1b6' => 
    array (
      0 => '../views/frontend/auth.tpl',
      1 => 1443008821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197513827356028f2dc99ac7-44199593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56028f2dcfb4b',
  'variables' => 
  array (
    'ss_sitename' => 0,
    'templateWebPath' => 0,
    'ss_siteurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56028f2dcfb4b')) {function content_56028f2dcfb4b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru ">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $_smarty_tpl->tpl_vars['ss_sitename']->value;?>
</title>

    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/bg.png" class="bg"/>
    <div class="autorization">
        <h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ss_sitename']->value,SMARTY_RESOURCE_CHAR_SET);?>
</h1>
        <h2>Авторизуйтесь</h2>
        <ul>
            <li><input type="button" class="vk"/></li>
            <li><input type="button" class="face"/></li>
            <li><input type="button" class="insta"/></li>
        </ul>
    </div>
    
<div style="display: none;" id="uLogin" data-ulogin="display=buttons;fields=first_name,last_name;
            redirect_uri=http%3A%2F%2F<?php echo $_smarty_tpl->tpl_vars['ss_siteurl']->value;?>
%2Fauth%2Flogin%2F;">
    <img id="vk" src="vkontakte.png" data-uloginbutton = "vkontakte"/>
    <img id="face" src="facebook.png" data-uloginbutton = "facebook"/>
	<img id="insta" src="facebook.png" data-uloginbutton = "instagram"/>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/script.js"></script>
	<script src="//ulogin.ru/js/ulogin.js"></script>
  </body>
</html><?php }} ?>