<?php /* Smarty version Smarty-3.1.6, created on 2015-09-25 13:14:42
         compiled from "../views/frontend/rates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9678757635603aa07387f82-40465227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b215ff3d17ea7fda2ff5cbc161ae2c5cabbd9a4' => 
    array (
      0 => '../views/frontend/rates.tpl',
      1 => 1443168878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9678757635603aa07387f82-40465227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5603aa0748b9f',
  'variables' => 
  array (
    'ss_sitename' => 0,
    'templateWebPath' => 0,
    'user' => 0,
    'ok' => 0,
    'rates' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603aa0748b9f')) {function content_5603aa0748b9f($_smarty_tpl) {?><!DOCTYPE html>
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
                    <h2>История ставок</h2>
                </div>
                <div class="history">
                <?php if ($_smarty_tpl->tpl_vars['ok']->value==1){?>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['end']==0){?>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['match']['startdate'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['match']['team1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['match']['team2'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
) ставка сделана</p>
                        <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['end']==1){?>
                                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['match']['startdate'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['match']['team1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['match']['team2'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
) Выиграли (<?php echo $_smarty_tpl->tpl_vars['item']->value['win'];?>
)</p>
                            <?php }else{ ?>
                                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['match']['startdate'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['match']['team1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['item']->value['match']['team2'];?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
) Проиграли</p>
                            <?php }?>
                        <?php }?>
                    <?php } ?>
                <?php }else{ ?>
                    <p>Вы ещё не сделали ни одной ставки.</p>
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