<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 17:28:40
         compiled from "../views/admin\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74365624d3e849bc14-60722043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d5a31361036e2883d712931afe86e499998f6d2' => 
    array (
      0 => '../views/admin\\footer.tpl',
      1 => 1442986032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74365624d3e849bc14-60722043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateAdminWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d3e851995',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d3e851995')) {function content_5624d3e851995($_smarty_tpl) {?>    </div>
    <!-- /#wrapper -->

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
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['templateAdminWebPath']->value;?>
tinymce/tinymce.min.js"></script>
    <script src="/js/admin/PickMeUp/js/jquery.pickmeup.min.js"></script>
    <script src="/js/admin/PickMeUp/js/jquery.pickmeup.twitter-bootstrap.min.js"></script>
    <script src="/js/admin/admin.js"></script>

</body>

</html>
<?php }} ?>