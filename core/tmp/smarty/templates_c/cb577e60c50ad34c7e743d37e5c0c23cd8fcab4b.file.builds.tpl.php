<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 17:34:53
         compiled from "../views/frontend\builds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257455624d55d6a7078-55111894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb577e60c50ad34c7e743d37e5c0c23cd8fcab4b' => 
    array (
      0 => '../views/frontend\\builds.tpl',
      1 => 1443895638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257455624d55d6a7078-55111894',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'builds' => 0,
    'ss_sitename' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d55d7a4f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d55d7a4f5')) {function content_5624d55d7a4f5($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
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