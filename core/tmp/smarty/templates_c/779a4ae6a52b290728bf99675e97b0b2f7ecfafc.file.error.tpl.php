<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 17:56:29
         compiled from "../views/frontend\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207545624da6db4a804-10265545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '779a4ae6a52b290728bf99675e97b0b2f7ecfafc' => 
    array (
      0 => '../views/frontend\\error.tpl',
      1 => 1443959224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207545624da6db4a804-10265545',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624da6dc7029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624da6dc7029')) {function content_5624da6dc7029($_smarty_tpl) {?>    <div class="panel panel-primary">
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