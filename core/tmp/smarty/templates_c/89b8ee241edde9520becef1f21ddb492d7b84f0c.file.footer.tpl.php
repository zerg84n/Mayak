<?php /* Smarty version Smarty-3.1.6, created on 2016-02-01 21:53:39
         compiled from "../views/admin/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208578855155b5009cc4f0e0-96776617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b8ee241edde9520becef1f21ddb492d7b84f0c' => 
    array (
      0 => '../views/admin/footer.tpl',
      1 => 1454263303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208578855155b5009cc4f0e0-96776617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55b5009cc76d3',
  'variables' => 
  array (
    'templateAdminWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5009cc76d3')) {function content_55b5009cc76d3($_smarty_tpl) {?>    </div>
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