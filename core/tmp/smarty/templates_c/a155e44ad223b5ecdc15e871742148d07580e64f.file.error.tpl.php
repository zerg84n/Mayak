<?php /* Smarty version Smarty-3.1.6, created on 2015-10-04 18:47:11
         compiled from "../views/frontend/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179347144956112bdaa86f55-17020163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a155e44ad223b5ecdc15e871742148d07580e64f' => 
    array (
      0 => '../views/frontend/error.tpl',
      1 => 1443966424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179347144956112bdaa86f55-17020163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56112bdaabd66',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56112bdaabd66')) {function content_56112bdaabd66($_smarty_tpl) {?>    <div class="panel panel-primary">
        <div class="panel-heading">Ошибка 404</div>
        <div class="panel-body" style="text-align: center;">
            <H1>404</H1>
            <H3>Такой страницы не существует.</H3>
            Проверьте, правильно ли введён адрес страницы. Если вы уверены, что адрес правильный, пожалуйста, сообщите о неполадке администратору сайта.
        </div>
        <div class="panel-footer">
            <table class="article_footer"><tbody><tr><td><a class="brokenlink" href="/contacts/"><small><i class="fa fa-bell fw"></i> Сообщить о неполадке</small></a></td><td style="text-align: right;"><div class="pager"><a class="btn btn-danger" href="#" OnClick="history.go(-1);return false;"><i class="fa fa-angle-left"></i> Назад</a></div></td></tr></tbody></table>
        </div>
    </div><?php }} ?>