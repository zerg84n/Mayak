<?php /* Smarty version Smarty-3.1.6, created on 2015-07-27 04:47:07
         compiled from "../views/admin/serversapi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190166650555b55566dff166-16477156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20d00dab922b6485c96488aa3f335b1ae2340ea1' => 
    array (
      0 => '../views/admin/serversapi.tpl',
      1 => 1437953740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190166650555b55566dff166-16477156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55b55566e3745',
  'variables' => 
  array (
    'servers' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b55566e3745')) {function content_55b55566e3745($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <title>Admin Servers Api</title>
</head>
<body>
	<input id="servers" value="<?php echo $_smarty_tpl->tpl_vars['servers']->value;?>
" />
	<script src="/js/jquery-2.1.4.min.js"></script>
	<script src="http://localhost:8080/socket.io/socket.io.js"></script>
	<script src="/js/admin/serversapi.js"></script>
</body>
</html>
<?php }} ?>