<?php /* Smarty version Smarty-3.1.6, created on 2015-10-04 01:07:21
         compiled from "../views/frontend/builds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35342082561014ac03a2e3-55704958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132ba03c6bec8960da9108d9f317b654d508262d' => 
    array (
      0 => '../views/frontend/builds.tpl',
      1 => 1443902839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35342082561014ac03a2e3-55704958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561014ac08e09',
  'variables' => 
  array (
    'builds' => 0,
    'ss_sitename' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561014ac08e09')) {function content_561014ac08e09($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['builds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['ss_sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['version'];?>
</div>
        <div class="panel-body newsitem_content">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

        </div>
        <div class="panel-footer">
            <table class="article_footer"><tbody><tr><td><small><i class="fa fa-download"></i> Скачано: <?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['cnt_rus'];?>
</small></td><td style="text-align: right;"><a class="btn btn-success downloadlink" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank">Скачать</a></td></tr></tbody></table>
        </div>
    </div>
<?php } ?>
<?php if (!isset($_smarty_tpl->tpl_vars['builds']->value[0])){?><div style="text-align: center; font-weight: bold;">Ни одной версии клиента не найдено.</div><?php }?><?php }} ?>