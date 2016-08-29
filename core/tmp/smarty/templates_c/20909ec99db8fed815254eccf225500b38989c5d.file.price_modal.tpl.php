<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 23:12:20
         compiled from "../views/frontend/price_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213947459156ae4e842c5808-36600121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20909ec99db8fed815254eccf225500b38989c5d' => 
    array (
      0 => '../views/frontend/price_modal.tpl',
      1 => 1454263325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213947459156ae4e842c5808-36600121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ae4e842fe97',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae4e842fe97')) {function content_56ae4e842fe97($_smarty_tpl) {?>      <div class="modal fade nowhitebg" id="modal-7">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <h1><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Скачать прайс-лист<?php }else{ ?>Download price-list<?php }?></h1>
                </div>
                <div class="w-body row">
                    <div class="tabs registrat">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1" data-toggle="tab" OnClick="price_otype('fiz');">
                                <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Розница<?php }else{ ?>Retail<?php }?></h3>
                                </a></li>
                            <li><a href="#tab-2" data-toggle="tab" OnClick="price_otype('opt');">
                                    <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Опт<?php }else{ ?>Wholesale<?php }?></h3>
                                </a></li>
                        </ul>
                        <div class="tab-content col-sm-offset-2 col-sm-8">
                            <div class="tab-pane fade in active" id="tab-1">
                                <form id="fizprice" action="">
                                    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><input type="submit" value="Скачать" class="enter-btn"><?php }else{ ?><input type="submit" value="Download" class="enter-btn"><?php }?>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <form id="optprice" action="">
								    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
								        <input type="text" name="fio" required="required" placeholder="Ф.И.О.">
                                        <input type="text" name="email" required="required" placeholder="Электронная почта">
                                        <input type="submit" value="Скачать" class="enter-btn">
									<?php }else{ ?>
								        <input type="text" name="fio" required="required" placeholder="Surname Name Lastname">
                                        <input type="text" name="email" required="required" placeholder="Email">
                                        <input type="submit" value="Download" class="enter-btn">
									<?php }?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }} ?>