<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 19:40:42
         compiled from "../views/frontend\cart_modal_ru.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479256aa0d7a0b81a2-02707557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1e07d01f430e7972642aba4c140b8d52ba6280a' => 
    array (
      0 => '../views/frontend\\cart_modal_ru.tpl',
      1 => 1454247277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479256aa0d7a0b81a2-02707557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa0d7a73bef',
  'variables' => 
  array (
    'ss_samovivoz_address_ru' => 0,
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
<?php if ($_valid && !is_callable('content_56aa0d7a73bef')) {function content_56aa0d7a73bef($_smarty_tpl) {?>    <div class="modal fade" id="modal-1">
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
                        <form class="orderform" action="">
                            <input name="name" type="text" placeholder="Фамилия Имя Отчество">
                            <input name="phone" type="text" placeholder="Телефон">
                            <input name="email" type="text" placeholder="Электронная почта">
							<input name="lang" type="hidden" value="Русский">
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
                        <form class="orderform" action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                        <div class="check-modal">
                                            <input id="check1" type="checkbox" name="samovivoz" value="Самовывоз">
                                            <label for="check1"><h3>Самовывоз</h3></label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="tab-txt"><a href="https://maps.yandex.ru/?text=<?php echo $_smarty_tpl->tpl_vars['ss_samovivoz_address_ru']->value;?>
" class="underline" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ss_samovivoz_address_ru']->value;?>
</a></h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Транспортная компания</h3>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="tcompany select sel-menu sel-mod">
                                            <div class="sel-select">
                                                <h5>Выберите компанию</h5>
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
                                                            <h4><?php echo $_smarty_tpl->tpl_vars['tc']->value['title_ru'];?>
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
                        <form class="orderform" action="">
                            <ul>
                                <li>
                                    <div class="col-md-3">
                                    <h3>Укажите адрес доставки</h3>
                                    </div>
                                    <div class="col-md-9">
                                        <input name="address" type="text">
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
                        <form class="orderform" action="">
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio1" type="radio" name="money" value="Наличный рассчёт">
                                    <label for="radio1"><h3>Наличный расчет</h3></label>
                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio2" type="radio" name="money" value="Безналичный рассчёт">
                                    <label for="radio2"><h3>Безналичный расчет</h3></label>
                                </div>
                            </div>
                            <div class="col-md-4 rad-mod">
                                <div class="check-modal">
                                    <input id="radio3" type="radio" name="money" value="Электронные платёжные системы">
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
                        <button class="back-btn" type="button" onclick="sendit('orderform');">Заказать</button>
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
                    <h1>Корзина</h1>
                    <h2>Успех</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4>Данные заказа отправлены менеджеру компании. Мы свяжемся с вами в ближайшее время. 
Спасибо за заказ!</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal">Закрыть</button>
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
                    <h1>Корзина</h1>
                    <h2>Неудача</h2>
                </div>
                <div class="w-body">
                    <div class="success col-md-offset-1 col-md-10">
                        <h4>Данные заказа не были отправлены.
						<br />Пожалуйста, заполните все поля формы и выберите форму оплаты.
						<br />При выборе опции самовывоза транспортную компанию и адрес доставки указывать не нужно.</h4>
                    </div>
                    <div class="w-footer">
                        <button class="back-btn" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-5">Назад</button>
                    </div>
                </div>
            </div>
        </div>
    </div><?php }} ?>