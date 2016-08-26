<?php /* Smarty version Smarty-3.1.6, created on 2016-02-01 21:53:28
         compiled from "../views/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195266222355b4e4ae9f9826-63422606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ecc3e0c74a39ee31535f30b53d3228ef64587a8' => 
    array (
      0 => '../views/admin/login.tpl',
      1 => 1454263304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195266222355b4e4ae9f9826-63422606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55b4e4aea7fb7',
  'variables' => 
  array (
    'ss_sitename' => 0,
    'title' => 0,
    'templateAdminWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b4e4aea7fb7')) {function content_55b4e4aea7fb7($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['ss_sitename']->value;?>
 | Административная панель | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
add.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Административная панель</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" class="btn btn-lg btn-success btn-block">Войти</a>
                            </fieldset>
                        </form>
                        <br />
                        <div class="alert alert-success alert_success">Добро пожаловать!</div>
                        <div class="alert alert-danger alert_error">Неправильный Email или пароль!</div>
                        <div style="text-align: center;"><a href="/"><?php echo $_smarty_tpl->tpl_vars['ss_sitename']->value;?>
 &copy; 2015</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
dist/js/sb-admin-2.js"></script>
	<script src="/js/admin/admin.js"></script>

</body>

</html>
<?php }} ?>