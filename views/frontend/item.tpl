    <div class="container topic">
        <h1>{if $lang == 'ru'}{$good.title_ru}{else}{$good.title_en}{/if}</h1>
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6 topic-pic">
                <div class="top-pic">
                    <img src="/documents/goods/{$photodir}/{$good.poster}" alt="">
                </div>
                <div class="other-pic">
                    <div class="oth-pic-wrapper">
                        <span class="oth-pic active">
                            <img src="/documents/goods/{$photodir}/m/{$good.poster}" alt="" data-original="/documents/goods/{$photodir}/{$good.poster}">
                        </span>
                    </div>
				    {foreach from=$good.photos item=photo}
                        <div class="oth-pic-wrapper">
                            <span class="oth-pic">
                                <img src="/documents/goods/{$photodir}/photos/m/{$photo}" alt="" data-original="/documents/goods/{$photodir}/photos/{$photo}">
                            </span>
                        </div>
					{/foreach}
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-6 about-topic">
                <div>
				    {if $lang == 'ru'}
					    {$good.description_ru}
					{else}
                        {if $good.description_en == ''}
						    <div class="langnotify">
							    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
							</div>
							{$good.description_ru}
						{else}
						    {$good.description_en}
						{/if}
					{/if}
				</div>
                <form id="addtocatform">
                    <input id="goodid" type="hidden" value="{$good.id}" />
                     <input id="fixprice" disable type="hidden" value="{$good.price[0]}" />
                    <div class="topic-settings">
                        <div class="rostovka">
                            <h2>Ростовка:</h2>
                            <select class="rost-sel" id="goodinfo" >
                                {foreach from=$good.rostovka key=key item=r}
                                    <option value="{$r@index}" data-rostid=" {$key}" data-txt="{$r}см" data-rostovka="{$r}" data-width="{$good.width[$key]}" data-price="{$good.price[$key]}">{$r}см
                                    </option>
                                {/foreach}   
                            </select>
                        </div>
                        <div class="width">
                            <h2>Ширина:</h2>
                            <input id="goodwidth" type="text" value="{$good.width[0]}см" class="width" readonly>
                        </div>
                        <div class="material">
                            <h2>Опции:</h2>
                            <select id="options" class="rost-sel">
                                
                                {foreach from=$good.options key=key item=r}
                                    <option value="{$r}">{$r}</option>
                                {/foreach}   
                                
                            </select>
                        </div>
                    </div>

                    <div class="topic-buy row">
                        <div class="col-md-7 col-xs-12">
                            <input type="text" id="goodprice" readonly class="topic-cost" value="{if $good.cat == 'goods_cat1'}{$good.price[0]}{else}{$good.price}{/if}">
                            <h4>за</h4>
                            <div class="amount">
                                {if $lang == 'ru'}<input id="gcnt" type="text" value="1 шт." data-txt="шт." disabled>{else}<input id="gcnt" type="text" value="1 p." data-txt="p." disabled>{/if}
                                <input id="cntup" type="button" class="up">
                                <input id="cntdown" type="button" class="down">
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12">
						    {if $lang == 'ru'}<input id="added" style="display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="Добавлено!" class="topic-btn" disabled>{else}<input id="added" style="display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="Added!" class="topic-btn" disabled>{/if}
                            {if $lang == 'ru'}<input id="addtocartbutton" type="submit" value="В корзину" class="topic-btn">{else}<input id="addtocartbutton" type="submit" value="Add to cart" class="topic-btn">{/if}
                        </div>
                    </div>
                </form>
				
    
              
    <!--  
               
                <form id="addtocatform">
				    <input id="goodid" type="hidden" value="{$good.id}" />
				    {if $good.cat == 'goods_cat1'}
                        <div class="topic-settings">
                            <div class="col-md-offset-2 col-md-4 col-xs-12 col-sm-7 set-left">
						        {if $lang == 'ru'}
                                    <div class="rostovka select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-rostid="0" data-cnt="1" data-rostovka="{$good.rostovka[0]}" data-width="{$good.width[0]}" data-price="{$good.price[0]}">{$good.rostovka[0]}см</h5>
                                            <img src="{$templateWebPath}images/sel3.png" alt="">
                                        </div>
                                        <div class="sel-option">
                                            <ul>
							    			    {foreach from=$good.rostovka key=key item=r}
                                                    <li>
                                                        <h4 data-rostid="{$key}" data-txt="{$r}см" data-rostovka="{$r}" data-width="{$good.width[$key]}" data-price="{$good.price[$key]}">{$r}см</h4>
                                                    </li>
							    				{/foreach}
                                            </ul>
                                        </div>
                                    </div>
							    {else}
                                    <div class="rostovka select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-cnt="1" data-rostovka="{$good.rostovka[0]}" data-width="{$good.width[0]}" data-price="{$good.price[0]}">{$good.rostovka[0]}sm</h5>
                                            <img src="{$templateWebPath}images/sel3.png" alt="">
                                        </div>
                                        <div class="sel-option">
                                            <ul>
							    			    {foreach from=$good.rostovka key=key item=r}
                                                    <li>
                                                        <h4 data-txt="{$r}sm" data-rostovka="{$r}" data-width="{$good.width[$key]}" data-price="{$good.width[$key]}">{$r}sm</h4>
                                                    </li>
							    				{/foreach}
                                            </ul>
                                        </div>
                                    </div>
							    {/if}
                                <h2>{if $lang == 'ru'}Ростовка:{else}Length:{/if}</h2>
                            </div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
                                <h2>{if $lang == 'ru'}Ширина: <span id="goodwidth">{$good.width[0]}</span>см{else}Width: <span id="goodwidth">{$good.width[0]}</span>sm{/if}</h2>
                            </div>
						</div>
					{/if}
				    {if $good.cat == 'goods_cat2'}
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
							    <h2>{if $lang == 'ru'}Размер: {else}Size: {/if}<input style="padding: 5px;" id="gsize" type="text" /></h2>
								<input id="goodinfo" data-cnt="1" data-price="{$good.price}" type="hidden" />
                            </div>
						</div>
					{/if}
				    {if $good.cat == 'goods_cat3'}
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
						        {if $lang == 'ru'}
                                    <div class="select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-cnt="1" data-price="{$good.price}">{$good.scale}</h5>
                                        </div>
                                    </div>
							    {else}
                                    <div class="select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-cnt="1" data-price="{$good.price}">{$good.scale}</h5>
                                        </div>
                                    </div>
							    {/if}
                                <h2>{if $lang == 'ru'}Размер:{else}Scale:{/if}</h2>
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
							    <h2>{if $lang == 'ru'}Объём(в кубах): {else}Volume(cubes): {/if}<input class="numberinput" id="cubevol" type="number" value="1" data-price="{$good.price}" /></h2>
                            </div>
						</div>
					{/if}
				    {if $good.cat == 'goods_cat4'}
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
							    <h2>{if $lang == 'ru'}Площадь(квадраты): {else}Area(squares): {/if}<input class="numberinput" id="squarearea" type="number" value="1" data-price="{$good.price}" /></h2>
								<input id="goodinfo" data-cnt="1" data-price="{$good.price}" type="hidden" />
                            </div>
						</div>
					{/if}
					{if $good.cat == 'goods_cat5'}
						<input id="goodinfo" data-cnt="1" data-price="{$good.price}" type="hidden" />
					{/if}
					{if $good.cat == 'goods_cat6'}
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
							    <h2>{if $lang == 'ru'}Объём: {$good.volume}л{else}Volume: {$good.volume}l{/if}</h2>
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
								<input id="goodinfo" data-cnt="1" data-price="{$good.price}" type="hidden" />
                            </div>
						</div>
					{/if}
                    <div class="topic-buy row">
                        <div class="col-md-7 col-xs-12">
                            <div class="topic-cost">
                                <h2 id="goodprice">{if $good.cat == 'goods_cat1'}{$good.price[0]}{else}{$good.price}{/if}</h2>
                            </div>
                            <h4>{if $lang == 'ru'}Кол{else}Cnt{/if}</h4>
                            <div class="amount">
                                {if $lang == 'ru'}<input id="gcnt" type="text" value="1 шт." data-txt="шт." disabled>{else}<input id="gcnt" type="text" value="1 p." data-txt="p." disabled>{/if}
                                <input id="cntup" type="button" class="up">
                                <input id="cntdown" type="button" class="down">
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12">
						    {if $lang == 'ru'}<input id="added" style="display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="Добавлено!" class="topic-btn" disabled>{else}<input id="added" style="display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="Added!" class="topic-btn" disabled>{/if}
                            {if $lang == 'ru'}<input id="addtocartbutton" type="submit" value="В корзину" class="topic-btn">{else}<input id="addtocartbutton" type="submit" value="Add to cart" class="topic-btn">{/if}
                        </div>
                    </div>
                </form>
                
    -->

                <hr class="hr-dashed">

                <div class="art-plug">
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp" data-size="s"></div>
                    {literal}
                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                    {/literal}
                </div>
            </div>
        </div>
    </div>
    
    <hr class="hr-solid">
    
    <div class="container goods other">
        <h1>{if $lang == 'ru'}Похожие товары{else}Similar items{/if}</h1>
        <div class="row">
		    {if isset($similar.0)}
		        {foreach from=$similar item=sim}
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="object goodssmallblock">
                            <a href="/catalogue/{$cur_cat}/item/{$sim.id}/"><h2>{if $lang == 'ru'}{$sim.title_ru}{else}{$sim.title_en}{/if}</h2></a>
                            <img src="/documents/goods/{$photodir}/m/{$sim.poster}" alt="" onclick="document.location.href = '/catalogue/{$cur_cat}/item/{$sim.id}/';"/>
                            </p>
                            {if $lang == 'ru'}<p>{$sim.small_description_ru}</p>{else}<p>{$sim.small_description_en}</p>{/if}
                            <div class="obj-cost">
                                <h3>{if $lang == 'ru'}от {$sim.price} Р{else}at {$sim.price} R{/if}</h3>
                                <button type="button" class="btn btn-info" onclick="document.location.href = '/catalogue/{$cur_cat}/item/{$sim.id}/';">{if $lang == 'ru'}КУПИТЬ{else}BUY{/if}</button>
                            </div>
                        </div>
                    </div>
			    {/foreach}
			{else}
			    <h1 style="font-size: 14px; color: #888888;">{if $lang == 'ru'}Нет рекомендаций{else}Recommendations not found{/if}</h1>
			{/if}
        </div>
    </div>
    
    <hr class="hr-solid">
    
    <div class="container price-list">
        <div class="row">
            <div class="col-md-offset-1 col-sm-4 col-md-3 col-sx-12">
                <h2>{if $lang == 'ru'}СКАЧАТЬ ПРАЙС-ЛИСТ{else}DOWNLOAD PRICE-LIST{/if}:</h2>
            </div>
            <div class="col-md-3 col-sm-4 col-sx-12 XLS">
                <img src="{$templateWebPath}images/XLS.png" alt="">
                <a href="#" data-toggle="modal" data-target="#modal-7" OnClick="price_type('xls');">{if $lang == 'ru'}В формате{else}In{/if} XLS</a>
            </div>
            <div class="col-md-3 col-sm-4 col-sx-12 ZIP">
                <img src="{$templateWebPath}images/ZIP.png" alt="">
                <a href="#" data-toggle="modal" data-target="#modal-7" OnClick="price_type('zip');">{if $lang == 'ru'}В формате{else}In{/if} ZIP</a>
            </div>
        </div>
    </div>
    
    <div class="bg slogan2">
        <div class="container slogan-wrapper">
            <div class="slogan-left">
			    {if $lang == 'ru'}
                    <h1>Лыжи фабрики «Маяк»</h1>
                    <p>Идеальный выбор для охоты, рыбалки и путешествий</p>
				{else}
                    <h1>Skis from «Mayak»</h1>
                    <p>The perfect choice for hunting, fishing and traveling</p>
				{/if}
            </div>
        </div>
    </div>