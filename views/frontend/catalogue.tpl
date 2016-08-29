</div>
    <div class="bg catalog-page">
        <div class="container menu">
            <div class="navbar">
                <div class="container catalog">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2>{if $lang == 'ru'}КАТАЛОГ ТОВАРОВ{else}CATALOGUE{/if}</h2>
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <li class="even">
                                <h3>{if $lang == 'ru'}Тип товара{else}Item type{/if}:</h3>
                                <div class="select sel-menu indexcatselect">
                                    <div class="sel-select">
                                        <h5>{if $lang == 'ru'}все{else}all{/if}</h5>
                                        <img src="{$templateWebPath}images/sel.png" alt="">
                                    </div>
                                    <div class="sel-option">
                                        <ul>
										    {if $lang == 'ru'}
                                                <li>
                                                    <h4 data-item="goods_cat1" data-txt="лыжи">Лыжи и комплектующие</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat2" data-txt="чмз">Черновые мебельные заготовки</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat3" data-txt="доска">Трехслойная отделочная доска</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat4" data-txt="клееный пол">Клееный пол</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat5" data-txt="мебель">Мебель</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat6" data-txt="клей">КФК клей</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="all" data-txt="все">Все</h4>
                                                </li>
											{else}
                                                <li>
                                                    <h4 data-item="goods_cat1" data-txt="skis">Skis and accessories</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat2" data-txt="rfc">Rough furniture components</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat3" data-txt="board">Three-layer finishing board</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat4" data-txt="floor">Laminated floor</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat5" data-txt="furniture">Furniture</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat6" data-txt="glue">Glue</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="all" data-txt="all">All</h4>
                                                </li>
											{/if}
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container goods">
        <div class="row">
		    {if isset($goods.0)}
		    {foreach from=$goods item=good}
			    {if $lang == 'ru'}
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="object goodssmallblock" data-item="/catalogue/{$good.good_cat}/item/{$good.id}/">
                            <h2>{$good.title_ru}</h2>
                            <img src="/documents/goods/{$good.good_cat}/m/{$good.poster}" alt=""/>
                            <div class="lnspacer"></div>
							<p>{$good.small_description_ru}...</p>
                            <div class="obj-cost">
                                <h3>{$good.price} Р</h3>
                                <button type="button" class="btn btn-info" onclick="document.location.href='/catalogue/{$good.good_cat}/item/{$good.id}/';return false;">КУПИТЬ</button>
                            </div>
                        </div>
                    </div>
				{else}
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="object goodssmallblock" data-item="/catalogue/{$good.good_cat}/item/{$good.id}/">
                            <h2>{$good.title_en}</h2>
                            <img src="/documents/goods/{$good.good_cat}/m/{$good.poster}" alt=""/>
                            {if $good.small_description_en == ''}
							    <p>{$good.small_description_ru}...</p>
						        <div class="langnotify">
						    	    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
						    	</div>
						    {else}
							    <p>{$good.small_description_en}...</p>
								<div class="lnspacer"></div>
						    {/if}
                            <div class="obj-cost">
                                <h3>{$good.price} R</h3>
                                <button type="button" class="btn btn-info" onclick="document.location.href='/catalogue/{$good.good_cat}/item/{$good.id}/';return false;">BUY</button>
                            </div>
                        </div>
                    </div>
				{/if}
			{/foreach}
            <div class="pagginator">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul>
                        {if $lang == 'ru'}
                		    {foreach from=$pages.pages item=page key=key}
                                {if $page >= 1 && $page <= $pages.pages[8]}
                                    {if $key == 4}
                                        <li><a href="{$plink}{$page}" class="active">{$pages.text[$key]}</a></li>
                                    {else}
                                        <li><a href="{$plink}{$page}">{$pages.text[$key]}</a></li>
                		    		{/if}
                                {/if}
                            {/foreach}
                		{else}
                		    {foreach from=$pages.pages item=page key=key}
                                {if $page >= 1 && $page <= $pages.pages[8]}
                                    {if $key == 4}
                                        <li><a href="{$plink}{$page}/" class="active">{$pages.text2[$key]}</a></li>
                                    {else}
                                        <li><a href="{$plink}{$page}/">{$pages.text2[$key]}</a></li>
                		    		{/if}
                                {/if}
                            {/foreach}
                		{/if}
                    </ul>
                </div>
            </div>
			{else}
                <div class="langnotify" style="color: #AA0000; border-color: #AA0000; background-color: rgba(255,0,0,0.15);">
				    <i class="fa fa-warning"></i>
			        {if $lang == 'ru'}
					    Не найдено ни одного товара в данной категории.
				    {else}
					    No items found in this section.
				    {/if}
				</div>
			{/if}
        </div>
    </div>
    
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