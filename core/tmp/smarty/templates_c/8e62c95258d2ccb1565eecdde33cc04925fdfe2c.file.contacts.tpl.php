<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 18:46:37
         compiled from "../views/frontend\contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235815624dade0a9c81-74520137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e62c95258d2ccb1565eecdde33cc04925fdfe2c' => 
    array (
      0 => '../views/frontend\\contacts.tpl',
      1 => 1454244395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235815624dade0a9c81-74520137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624dade20ba8',
  'variables' => 
  array (
    'lang' => 0,
    'templateWebPath' => 0,
    'ss_phone' => 0,
    'ss_phone2' => 0,
    'ss_email2' => 0,
    'ss_email' => 0,
    'ss_fax' => 0,
    'ss_captcha_key' => 0,
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
<?php if ($_valid && !is_callable('content_5624dade20ba8')) {function content_5624dade20ba8($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Контактная информация<?php }else{ ?>Contact information<?php }?>
        </h1>
    </div>
    
    <div class="container">
        <div class="contacts row">
            <div class="col-md-4">
                <div class="con-block">
                    <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Телефон<?php }else{ ?>Phone<?php }?></h3>
                    <div class="contacts-about">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/contact1.png" alt="">
                        <h4><?php echo $_smarty_tpl->tpl_vars['ss_phone']->value;?>
</h4>
                        <h4><?php echo $_smarty_tpl->tpl_vars['ss_phone2']->value;?>
</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="con-block">
                    <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Электронная почта<?php }else{ ?>Email<?php }?></h3>
                    <div class="contacts-about">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/contact2.png" alt="">
                        <h4><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['ss_email2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ss_email2']->value;?>
</a> (<?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>юр.лицам<?php }else{ ?>legal entity<?php }?>)</h4>
                        <h4><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['ss_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ss_email']->value;?>
</a> (<?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>физ.лицам<?php }else{ ?>individual<?php }?>)</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="con-block">
                    <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Факс<?php }else{ ?>Fax<?php }?></h3>
                    <div class="contacts-about">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/contact1.png" alt="">
                        <h4><?php echo $_smarty_tpl->tpl_vars['ss_fax']->value;?>
</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="connect container">
        <h2 class="theme-block"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Свяжитесь с нами<?php }else{ ?>Write us<?php }?></h2>
		<?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
            <form id="contactsform">
                <div class="row">
                    <div class="col-md-6">
                        <input name="name" type="text" required placeholder="Имя и Фамилия">
                        <input name="email" type="text" required placeholder="Электронная почта">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['ss_captcha_key']->value;?>
"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <textarea name="message" required placeholder="Ваше сообщение"></textarea>
                    </div>
                </div>
				<input id="added" data-error="Не отправлено!" data-success="Отправлено!" style="border: none; display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="" class="topic-btn" disabled>
                <input type="submit" class="con-btn" value="Отправить">
            </form>
		<?php }else{ ?>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <input name="name" type="text" placeholder="Name and surname">
                        <input name="email" type="text" placeholder="Email">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['ss_captcha_key']->value;?>
"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <textarea name="message" required placeholder="Your message"></textarea>
                    </div>
                </div>
				<input id="added" data-error="Not send!" data-success="Send!" style="border: none; display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="" class="topic-btn" disabled>
                <input type="submit" class="con-btn" value="Send">
            </form>
		<?php }?>
    </div>
    
    <hr class="hr-solid">
    
    <div class="requisite container">
        <h2 class="theme-block"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Юридические  реквизиты<?php }else{ ?>Legal details<?php }?></h2>
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
</div>
    <hr class="hr-solid">
    
    <div class="gis2">
    <h2><?php echo $_smarty_tpl->tpl_vars['ss_address']->value;?>
</h2>
	
        <a class="dg-widget-link" href="http://2gis.ru/kirov/firm/70000001006140736/center/49.71577405929566,58.46517723732886/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Кирова</a><div class="dg-widget-link"><a href="http://2gis.ru/kirov/center/49.715776,58.465175/zoom/16/routeTab/rsType/bus/to/49.715776,58.465175╎Маяк, ООО, лыжная фабрика?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Маяк, ООО, лыжная фабрика</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":"435px","borderColor":"#a3a3a3","pos":{"lat":58.46517723732886,"lon":49.71577405929566,"zoom":16},"opt":{"city":"kirov"},"org":[{"id":"70000001006140736"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
    
	</div><?php }} ?>