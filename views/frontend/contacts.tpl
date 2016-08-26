    <div class="bg">
        <h1 class="container theme-tab">
            {if $lang == 'ru'}Контактная информация{else}Contact information{/if}
        </h1>
    </div>
    
    <div class="container">
        <div class="contacts row">
            <div class="col-md-4">
                <div class="con-block">
                    <h3>{if $lang == 'ru'}Телефон{else}Phone{/if}</h3>
                    <div class="contacts-about">
                        <img src="{$templateWebPath}images/contact1.png" alt="">
                        <h4>{$ss_phone}</h4>
                        <h4>{$ss_phone2}</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="con-block">
                    <h3>{if $lang == 'ru'}Электронная почта{else}Email{/if}</h3>
                    <div class="contacts-about">
                        <img src="{$templateWebPath}images/contact2.png" alt="">
                        <h4><a href="mailto:{$ss_email2}">{$ss_email2}</a> ({if $lang == 'ru'}юр.лицам{else}legal entity{/if})</h4>
                        <h4><a href="mailto:{$ss_email}">{$ss_email}</a> ({if $lang == 'ru'}физ.лицам{else}individual{/if})</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="con-block">
                    <h3>{if $lang == 'ru'}Факс{else}Fax{/if}</h3>
                    <div class="contacts-about">
                        <img src="{$templateWebPath}images/contact1.png" alt="">
                        <h4>{$ss_fax}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="connect container">
        <h2 class="theme-block">{if $lang == 'ru'}Свяжитесь с нами{else}Write us{/if}</h2>
		{if $lang == 'ru'}
            <form id="contactsform">
                <div class="row">
                    <div class="col-md-6">
                        <input name="name" type="text" required placeholder="Имя и Фамилия">
                        <input name="email" type="text" required placeholder="Электронная почта">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="{$ss_captcha_key}"></div>
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
		{else}
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <input name="name" type="text" placeholder="Name and surname">
                        <input name="email" type="text" placeholder="Email">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="{$ss_captcha_key}"></div>
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
		{/if}
    </div>
    
    <hr class="hr-solid">
    
    <div class="requisite container">
        <h2 class="theme-block">{if $lang == 'ru'}Юридические  реквизиты{else}Legal addresses and bank information{/if}</h2>
		{if $lang == 'ru'}
            <ul>
                <li>
                    <h3>Полное наименование</h3>
                    <h3 class="h3-right">{$ss_legal_title}</h3>
                </li>
                <li>
                    <h3>Юридический адрес</h3>
                    <h3 class="h3-right">{$ss_legal_address}</h3>
                </li>
                <li>
                    <h3>Почтовый адрес</h3>
                    <h3 class="h3-right">{$ss_address}</h3>
                </li>
                <li>
                    <h3>ИНН</h3>
                    <h3 class="h3-right">{$ss_legal_inn}</h3>
                </li>
                <li>
                    <h3>КПП</h3>
                    <h3 class="h3-right">{$ss_legal_kpp}</h3>
                </li>
                <li>
                    <h3>ОГРН</h3>
                    <h3 class="h3-right">{$ss_legal_ogrn}</h3>
                </li>
                <li>
                    <h3>ОКПО</h3>
                    <h3 class="h3-right">{$ss_legal_okpo}</h3>
                </li>
                <li>
                    <h3>Расчетный счет</h3>
                    <h3 class="h3-right">{$ss_legal_check_acc}</h3>
                </li>
                <li>
                    <h3>БИК </h3>
                    <h3 class="h3-right">{$ss_legal_bik}</h3>
                </li>
                <li>
                    <h3>Директор</h3>
                    <h3 class="h3-right">{$ss_director_fio}</h3>
                </li>
            </ul>
		{else}
            <ul>
                <li>
                    <h3>Company full name</h3>
                    <h3 class="h3-right">{$ss_legal_title}</h3>
                </li>
                <li>
                    <h3>Legal address</h3>
                    <h3 class="h3-right">{$ss_legal_address}</h3>
                </li>
                <li>
                    <h3>Post address</h3>
                    <h3 class="h3-right">{$ss_address}</h3>
                </li>
                <li>
                    <h3>TIN(ИНН)</h3>
                    <h3 class="h3-right">{$ss_legal_inn}</h3>
                </li>
                <li>
                    <h3>RRC(КПП)</h3>
                    <h3 class="h3-right">{$ss_legal_kpp}</h3>
                </li>
                <li>
                    <h3>OGRN(ОГРН - Primary State Registration Number)</h3>
                    <h3 class="h3-right">{$ss_legal_ogrn}</h3>
                </li>
                <li>
                    <h3>OKPO(ОКПО - National Classifier of Enterprises and Organizations)</h3>
                    <h3 class="h3-right">{$ss_legal_okpo}</h3>
                </li>
                <li>
                    <h3>Corporate bank account(Расчетный счет)</h3>
                    <h3 class="h3-right">{$ss_legal_check_acc}</h3>
                </li>
                <li>
                    <h3>RCBIC(БИК - Russian Central Bank Identifier Code)</h3>
                    <h3 class="h3-right">{$ss_legal_bik}</h3>
                </li>
                <li>
                    <h3>Chief Officer(Директор)</h3>
                    <h3 class="h3-right">{$ss_director_fio}</h3>
                </li>
            </ul>
		{/if}
    </div>
</div>
    <hr class="hr-solid">
    
    <div class="gis2">
    <h2>{$ss_address}</h2>
	{literal}
        <a class="dg-widget-link" href="http://2gis.ru/kirov/firm/70000001006140736/center/49.71577405929566,58.46517723732886/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Кирова</a><div class="dg-widget-link"><a href="http://2gis.ru/kirov/center/49.715776,58.465175/zoom/16/routeTab/rsType/bus/to/49.715776,58.465175╎Маяк, ООО, лыжная фабрика?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Маяк, ООО, лыжная фабрика</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":"435px","borderColor":"#a3a3a3","pos":{"lat":58.46517723732886,"lon":49.71577405929566,"zoom":16},"opt":{"city":"kirov"},"org":[{"id":"70000001006140736"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
    {/literal}
	</div>