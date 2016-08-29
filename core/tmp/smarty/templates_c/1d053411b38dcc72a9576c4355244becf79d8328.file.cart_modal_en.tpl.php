<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 20:35:42
         compiled from "../views/frontend\cart_modal_en.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1204956aa08e95a5570-67272470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d053411b38dcc72a9576c4355244becf79d8328' => 
    array (
      0 => '../views/frontend\\cart_modal_en.tpl',
      1 => 1454248357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1204956aa08e95a5570-67272470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa08e9c6f83',
  'variables' => 
  array (
    'ss_samovivoz_address_en' => 0,
    'templateWebPath' => 0,
    'transport' => 0,
    'tc' => 0,
    'ss_legal_title' => 0,
    'ss_legal_address' => 0,
    'ss_address' => 0,
    'ss_legal_inn' => 0,
    'ss_legal_kpp' => 0,
    'ss_legal_ogrn' => 0,
    'ss_legal_okpo' => 0,
    'ss_legal_check_acc' => 0,
    'ss_legal_bik' => 0,
    'ss_director_fio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa08e9c6f83')) {function content_56aa08e9c6f83($_smarty_tpl) {?>    <div class="modal fade" id="modal-1">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Personal data</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat col-md-offset-2 col-md-8">
                        <form class="orderform" action="">
                            <input name="name" type="text" placeholder="Name Surname Lastname">
                            <input name="phone" type="text" placeholder="Phone">
                            <input name="email" type="text" placeholder="Email">
							<input name="lang" type="hidden" value="Английский">
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-toggle="modal" data-target="#modal-1" style="display: inline-block;">Cancel</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-2">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Delivery method</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat cart col-md-offset-2 col-md-9">
                        <form class="orderform" action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                        <div class="check-modal">
                                            <input id="check1" type="checkbox" name="samovivoz" value="Самовывоз">
                                            <label for="check1"><h3>Pickup</h3></label>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="tab-txt"><a href="https://maps.yandex.ru/?text=<?php echo $_smarty_tpl->tpl_vars['ss_samovivoz_address_en']->value;?>
" class="underline" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ss_samovivoz_address_en']->value;?>
</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Transport company</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tcompany select sel-menu sel-mod">
                                            <div class="sel-select">
                                                <h5>Choose a company</h5>
												<input name="transport" id="tcc" type="hidden" />
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/sel4.png" alt="">
                                            </div>
                                            <div class="sel-option">
                                                <ul>
												    <?php  $_smarty_tpl->tpl_vars['tc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transport']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tc']->key => $_smarty_tpl->tpl_vars['tc']->value){
$_smarty_tpl->tpl_vars['tc']->_loop = true;
?>
                                                        <li>
                                                            <h4><?php echo $_smarty_tpl->tpl_vars['tc']->value['title_en'];?>
</h4>
                                                        </li>
													<?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-1" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-3" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-3">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Delivery address</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat cart col-md-offset-1 col-md-10">
                        <form class="orderform" action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Delivery address</h3>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="address" type="text">
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-4" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-4">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Payment details</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="tab-pane registrat cart col-md-offset-1 col-md-10">
                        <form class="orderform" action="">
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio1" type="radio" name="money" value="Наличный рассчёт">
                                    <label for="radio1"><h3>Cash</h3></label>

                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio2" type="radio" name="money" value="Безналичный рассчёт">
                                    <label for="radio2"><h3>Cashless</h3></label>

                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio3" type="radio" name="money" value="Электронные платёжные системы">
                                    <label for="radio3"><h3 class="rouge">Electronic payment systems</h3></label>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-3" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" style="display: inline-block;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-5">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Confirmation</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Personal data</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Delivery method</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Delivery address</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Payment details</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Confirmation</h3></a>
                        </div>
                    </div>
                    <div class="modal-bar modal-bar-tel">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>1</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>2</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>3</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>4</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>5</h3></a>
                        </div>
                    </div>
                    <div class="requisite requisite-mod col-md-offset-1 col-md-10">
                        <ul>
                            <li>
                                <h3>Полное наименование</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_title']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>Юридический адрес</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_address']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>Почтовый адрес</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_address']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>ИНН</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_inn']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>КПП</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_kpp']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>ОГРН</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_ogrn']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>ОКПО</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_okpo']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>Расчетный счет</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_check_acc']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>БИК </h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_legal_bik']->value;?>
</h3>
                            </li>
                            <li>
                                <h3>Директор</h3>
                                <h3 class="h3-right"><?php echo $_smarty_tpl->tpl_vars['ss_director_fio']->value;?>
</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-4" style="display: inline-block;">Back</button>
                        <button class="back-btn" type="button" onclick="sendit('orderform');">Order</button>
						<button id="sendordersuccess" class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-6" style="display: none;">SEND</button>
						<button id="sendordererror" class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-8" style="display: none;">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal-6">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Success</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4>Order data sent to the company manager. We will contact you shortly. Thanks for your order!</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="modal fade" id="modal-8">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Cart</h1>
                    <h2>Unsuccessful</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4> Order data have not been sent.
                        <br /> Please fill in all the fields, and select a form of payment.
						<br />If you chose "Pickup", the transport company and the delivery address is not needed.</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-5">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }} ?>