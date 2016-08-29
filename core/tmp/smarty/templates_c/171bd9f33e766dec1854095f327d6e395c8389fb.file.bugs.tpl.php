<?php /* Smarty version Smarty-3.1.6, created on 2015-10-05 18:00:56
         compiled from "../views/frontend/bugs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159097483356102f80ed5950-54176029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171bd9f33e766dec1854095f327d6e395c8389fb' => 
    array (
      0 => '../views/frontend/bugs.tpl',
      1 => 1444049993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159097483356102f80ed5950-54176029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56102f80f27f8',
  'variables' => 
  array (
    'bugs' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56102f80f27f8')) {function content_56102f80f27f8($_smarty_tpl) {?><div class="panel panel-primary">
    <div class="panel-heading">Сообщить о баге</div>
    <div class="panel-body">
        <form id="addbug-form" method="POST" action="/index/ajax/">
            <div class="form-group">
                <input class="form-control" type="text" name="title" placeholder="Название бага">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Ваше имя">
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Ваш Email">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" rows="3" placeholder="Описание бага"></textarea>
            </div>
            <button style="margin: 0 auto; display: block; margin-bottom: 10px;" type="submit" class="btn btn-success">Сообщить</button>
            <div class="alert alert-success">Отправлено!</div><div class="alert alert-danger">Неверно заполнена форма!</div>
        </form>
    </div>
</div>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bugs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div class="panel panel-primary">
        <div class="panel-heading"><i class="fa fa-gear"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
        <div class="panel-body newsitem_content">
            <?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>

        </div>
        <div class="panel-footer">
            <small><i class="fa fa-user"></i> Прислал: <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</small>
        </div>
    </div>
<?php } ?>
<?php if (!isset($_smarty_tpl->tpl_vars['bugs']->value[0])){?><div style="text-align: center; font-weight: bold;">Ни одного бага не найдено.</div><?php }?><?php }} ?>