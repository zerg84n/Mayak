<?php /* Smarty version Smarty-3.1.6, created on 2016-01-26 15:10:19
         compiled from "../views/frontend\index_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145905638d7dc76b9e4-00915810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '332aface902235abce3a7cbb56be29ff99dac428' => 
    array (
      0 => '../views/frontend\\index_modal.tpl',
      1 => 1453799417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145905638d7dc76b9e4-00915810',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5638d7dcddf49',
  'variables' => 
  array (
    'templateWebPath' => 0,
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
    'lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638d7dcddf49')) {function content_5638d7dcddf49($_smarty_tpl) {?>    <div class="modal fade" id="modal-1">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <button class="modal-close" data-dismiss="modal"></button>
                    <h1>Корзина</h1>
                    <h2>Личные данные</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Личные данные</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Способ доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Адрес доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Форма оплаты</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Подтверждение</h3></a>
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
                        <form action="">
                            <input type="text" placeholder="Фамилия Имя Отчество">
                            <input type="text" placeholder="Телефон">
                            <input type="text" placeholder="Электронная почта*">
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-toggle="modal" data-target="#modal-1" style="display: inline-block;">Отмена</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" style="display: inline-block;">Далее</button>
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
                    <h1>Корзина</h1>
                    <h2>Способы доставки</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Личные данные</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Способ доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Адрес доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Форма оплаты</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Подтверждение</h3></a>
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
                        <form action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                        <div class="check-modal">
                                            <input id="check1" type="checkbox" name="check" value="check1">
                                            <label for="check1"><h3>Самовывоз</h3></label>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="tab-txt"><a href="#" class="underline">Кировская обл., д. Шутовщина, Кирово-Чепецкий р-н., ул. Октябрьская 2Б</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Транспортная компания</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="select sel-menu sel-mod">
                                            <div class="sel-select">
                                                <h5>Выберите компанию</h5>
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/sel4.png" alt="">
                                            </div>
                                            <div class="sel-option">
                                                <ul>
                                                    <li>
                                                        <h4>Певая Транспортная Компания</h4>
                                                    </li>
                                                    <li>
                                                        <h4>Дели Эемпресс</h4>
                                                    </li>
                                                    <li>
                                                        <h4>Пони деливери</h4>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-1" style="display: inline-block;">Назад</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-3" style="display: inline-block;">Далее</button>
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
                    <h1>Корзина</h1>
                    <h2>Адрес доставки</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Личные данные</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Способ доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Адрес доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Форма оплаты</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Подтверждение</h3></a>
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
                        <form action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Укажите адрес доставки</h3>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text">
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-2" style="display: inline-block;">Назад</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-4" style="display: inline-block;">Далее</button>
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
                    <h1>Корзина</h1>
                    <h2>Форма оплаты</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Личные данные</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Способ доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Адрес доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Форма оплаты</h3></a>
                            <hr>
                        </div>
                        <div class="m-def">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Подтверждение</h3></a>
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
                        <form action="">
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio1" type="radio" name="check" value="radio1">
                                    <label for="radio1"><h3>Наличный расчет</h3></label>

                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio2" type="radio" name="check" value="radio2">
                                    <label for="radio2"><h3>Безналичный расчет</h3></label>

                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio3" type="radio" name="check" value="radio1">
                                    <label for="radio3"><h3 class="rouge">Электронные платежные системы</h3></label>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="w-footer" style="text-align: center;">
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-3" style="display: inline-block;">Назад</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-5" style="display: inline-block;">Далее</button>
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
                    <h1>Корзина</h1>
                    <h2>Подтверждение</h2>
                </div>
                <div class="w-body">
                    <div class="modal-bar">
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-1"><h3>Личные данные</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-2"><h3>Способ доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-3"><h3>Адрес доставки</h3></a>
                            <hr>
                        </div>
                        <div class="m-now">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-4"><h3>Форма оплаты</h3></a>
                            <hr>
                        </div>
                        <div class="m-next">
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-5"><h3>Подтверждение</h3></a>
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
					    <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-4" style="display: inline-block;">Назад</button>
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-6" style="display: inline-block;">Далее</button>
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
                    <h1>Корзина</h1>
                    <h2>Успех</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4>Данные заказа отправлены менеджеру компании. Мы свяжемся с вами в ближайшее время. 
Спасибо за заказ!</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal">Вернуться</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div class="modal fade nowhitebg" id="modal-7">
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
                                    <input type="submit" value="Скачать" class="enter-btn">
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <form id="optprice" action="">
								    <input type="text" name="fio" required="required" placeholder="Ф.И.О.">
                                    <input type="text" name="email" required="required" placeholder="Электронная почта*">
                                    <input type="submit" value="Скачать" class="enter-btn">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }} ?>