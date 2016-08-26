<?php /* Smarty version Smarty-3.1.6, created on 2015-09-30 14:43:39
         compiled from "../views/frontend/score.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15604709075603c3cb6391f1-99565776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a3f88b5ebabada81714385994e0f39c1d8fc147' => 
    array (
      0 => '../views/frontend/score.tpl',
      1 => 1443606161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15604709075603c3cb6391f1-99565776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5603c3cb6ad86',
  'variables' => 
  array (
    'ss_sitename' => 0,
    'templateWebPath' => 0,
    'user' => 0,
    'ss_siteurl' => 0,
    'score' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603c3cb6ad86')) {function content_5603c3cb6ad86($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h2>Операции со счётом</h2>
                </div>
                <div class="expense" style="margin-bottom: 15px;">
                    <h3>Внести на счёт</h3>
                    <form id="paytoscoreform" name="pay" method="POST" action="https://merchant.webmoney.ru/lmi/payment.asp">
                        <input id="paytoscoresumm" type="text" placeholder="Сумма платежа">
                        <input id="realmoney" type="hidden" name="LMI_PAYMENT_AMOUNT" value="1.0">
                        <input type="hidden" name="LMI_PAYMENT_DESC" value="Fill up balance on <?php echo $_smarty_tpl->tpl_vars['ss_siteurl']->value;?>
">
                        <input type="hidden" name="LMI_PAYEE_PURSE" value="R277708771265">
						   <input type="hidden" name="LMI_SUCCESS_URL" value="http://<?php echo $_smarty_tpl->tpl_vars['ss_siteurl']->value;?>
/score/success/">
                        <input type="hidden" name="LMI_FAIL_URL" value="http://<?php echo $_smarty_tpl->tpl_vars['ss_siteurl']->value;?>
/score/fail/">
                        <input type="hidden" name="LMI_RESULT_URL" value="http://<?php echo $_smarty_tpl->tpl_vars['ss_siteurl']->value;?>
/score/">
                        <input id="paytoscore" type="button" class="btn btn-success" value="ОПЛАТИТЬ">
						   <div id="paytoscore_error" class="alert alert-danger alert_error" style="font-size: 14px; text-align: center; width: 80%; margin: 5px auto; padding: 5px; display: none; opacity: 0.0;">Сумма должна быть больше нуля!</div>
                    </form>
                </div>
                <div class="expense">
                    <h3>Вывод средств</h3>
                    <form id="payment" name="pay" method="POST" action="/score/payment/">
                        <input id="paymentmoney" type="text" placeholder="Сумма">
                        <input id="paymentsubmit" type="button" class="btn btn-success" value="ЗАКАЗАТЬ">
                          <div class="alert alert-success alert_success" style="font-size: 14px; text-align: center; width: 80%; margin: 5px auto; padding: 5px; display: none; opacity: 0.0;">Заказ принят!</div>
                          <div class="alert alert-danger alert_error" style="font-size: 14px; text-align: center; width: 80%; margin: 5px auto; padding: 5px; display: none; opacity: 0.0;">Сумма не может быть равна нулю!</div>
                          <div class="alert alert-danger alert_error2" style="font-size: 14px; text-align: center; width: 80%; margin: 5px auto; padding: 5px; display: none; opacity: 0.0;">Сумма превышает баланс счета!</div>
                    </form>
                </div>
                <div class="theme">
                    <h2>История вывода средств</h2>
                </div>
                <div class="history">
                <?php if (isset($_smarty_tpl->tpl_vars['score']->value[0])){?>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['score']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
 Заказ на вывод <?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
 руб. в ожидании.</p>
                        <?php }else{ ?>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
 Заказ на вывод <?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
 руб. выполнен.</p>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <p>Не найдено ни одной операции.</p>
                <?php }?>
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