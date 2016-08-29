<?php /* Smarty version Smarty-3.1.6, created on 2015-09-30 14:11:22
         compiled from "../views/frontend/settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127770146456029d4abcfd04-82649333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a5012edda43c61aa3f6d06819998536586fe70' => 
    array (
      0 => '../views/frontend/settings.tpl',
      1 => 1443169310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127770146456029d4abcfd04-82649333',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56029d4ac5b14',
  'variables' => 
  array (
    'ss_sitename' => 0,
    'templateWebPath' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56029d4ac5b14')) {function content_56029d4ac5b14($_smarty_tpl) {?><!DOCTYPE html>
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
            <div class="wrapper">
                <div class="header">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['ss_sitename']->value,SMARTY_RESOURCE_CHAR_SET);?>
</h2>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-3">
                        <h3><a class="cost" href="/score/" style="font-size: 14px;">Счет:<?php echo $_smarty_tpl->tpl_vars['user']->value['money'];?>
руб.</a></h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <h3><a href="/rates/" style="font-size: 14px;">Ставки</a></h3>
                    </div>
                    <div class="col-lg-1 col-md-1 col-md-1 col-sm-1 col-xs-1">
                        <a href="/settings/"><input type="button" class="option-btn"></a>
                    </div>
                    <div class="col-lg-1 col-md-1 col-md-1 col-sm-1 col-xs-1">
                        <a href="/index/exit/"><input type="button" class="option-btn" style="background: url(<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/exit.png) top left no-repeat;"></a>
                    </div>
                </div>
                <div class="content">
                <div class="theme">
                    <h2>Настройки</h2>
                </div>
                <div class="options">
                    <form id="settingsform" method="POST" action="/settings/">
                        <input id="payment" type="text" placeholder="Счет WMR" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['payment'];?>
">
                        <input id="fio" type="text" placeholder="ФИО" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['fio'];?>
">
                        <input type="submit" class="btn btn-success" value="СОХРАНИТЬ">
                        <div class="alert alert-success alert_success" style="font-size: 14px; text-align: center; width: 80%; margin: 5px auto; padding: 5px; display: none; opacity: 0.0;">Изменения применены!</div>
                        <div class="alert alert-danger alert_error" style="font-size: 14px; text-align: center; width: 80%; margin: 5px auto; padding: 5px; display: none; opacity: 0.0;">Неверно заполнена форма!</div>
                    </form>
                </div>
            </div>
        </div>
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/script.js"></script>
    </body>
</html><?php }} ?>