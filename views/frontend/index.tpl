        <div id="carousel" class="container carousel slide">
            <ol class="carousel-indicators">
                {foreach from=$slider item=slide key=k}
				    {if $k == 0}
				        <li class="active" data-target="#carousel" data-slide-to="{$k}"></li>
				    {else}
                        <li data-target="#carousel" data-slide-to="{$k}"></li>
				    {/if}
				{/foreach}
            </ol>
			<div id="slbgs" style="display: none;">
			    {foreach from=$slider item=slide key=k}
				    <input type="hidden" value="/documents/slider/{$slide.poster}" />
				{/foreach}
			</div>
            <div class="carousel-inner">
			    {if $lang == 'ru'}
                    {foreach from=$slider item=slide key=k}
			    	    {if $k == 0}<div class="item active row" style="background-image: url('/documents/slider/{$slide.poster}');">{else}<div class="item row" style="background-image: url('/documents/slider/{$slide.poster}');">{/if}
                            <div class="col-lg-offset-6 col-md-offset-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="theme-item">
                                    <h2>лыжная фабрика «маяк»</h2>
                                </div>
                                <div class="item-name row">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 name-item">
                                        <h1>{$slide.title_ru}</h1>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 item-cost">
                                        <h1>{$slide.price} Р</h1>
                                    </div>
                                </div>
                                <div class="about-item">{$slide.description_ru}</div>
                                <div class="item-buy row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a href="#">
                                            <!--data-toggle="modal" data-target="#modal-1" -->
											<button class="item-btn" onclick="document.location.href='/catalogue/{$slide.good_cat}/item/{$slide.good_id}/';return false;">КУПИТЬ</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 more-link"><!--<h3><a href="/catalogue/{$slide.good_cat}/item/{$slide.good_id}/">Подробнее</a></h3>--></div>
                                </div>
                            </div>
                        </div>
			    	{/foreach}
			    {else}
                    {foreach from=$slider item=slide key=k}
			    	    {if $k == 0}<div class="item active row" style="background-image: url('/documents/slider/{$slide.poster}');">{else}<div class="item row" style="background-image: url('/documents/slider/{$slide.poster}');">{/if}
                            <div class="col-lg-offset-6 col-md-offset-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="theme-item">
                                    <h2>skis factory «mayak»</h2>
                                </div>
                                <div class="item-name row">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 name-item">
                                        <h1>{$slide.title_en}</h1>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 item-cost">
                                        <h1>{$slide.price} R</h1>
                                    </div>
                                </div>
                                <div class="about-item">{$slide.description_en}</div>
                                <div class="item-buy row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a href="#">
                                            <button class="item-btn" onclick="document.location.href='/catalogue/{$slide.good_cat}/item/{$slide.good_id}/';return false;">BUY</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 more-link"><!--<h3><a href="/catalogue/{$slide.good_cat}/item/{$slide.good_id}/">Read more</a></h3>--></div>
                                </div>
                            </div>
                        </div>
			    	{/foreach}
			    {/if}
            </div>
        </div>
    </div>
    
    <div class="bg">
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="/catalogue/" class="show-all-link">{if $lang == 'ru'}Показывать все товары{else}See all goods{/if}</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
            </div>
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
    
    <div class="bg slogan">
        <div class="container slogan-wrapper">
            <div class="slogan-right">
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
    
    <div class="container news">
        <div class="block-theme">
            <h2>{if $lang == 'ru'}НОВОСТИ{else}NEWS{/if}</h2>
        </div>
        <div class="news-block row">
		    {if $lang == 'ru'}
		        {foreach from=$news item=newsitem}
                    <div class="col-sm-4">
                        <h1><a href="/news/article/{$newsitem.id}/">{$newsitem.title_ru}</a></h1>
                        <a href="/news/article/{$newsitem.id}/"><img src="/documents/news/m/{$newsitem.poster}" alt=""></a>
                        {$newsitem.small_description_ru}
                    </div>
			    {/foreach}
			{else}
		        {foreach from=$news item=newsitem}
                    <div class="col-sm-4">
                        <h1><a href="/news/article/{$newsitem.id}/">{$newsitem.title_en}</a></h1>
                        <a href="/news/article/{$newsitem.id}/"><img src="/documents/news/m/{$newsitem.poster}" alt=""></a>
                        {if $newsitem.small_description_en == ''}
						    <div class="langnotify">
							    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
							</div>
							{$newsitem.small_description_ru}
						{else}
						    {$newsitem.small_description_en}
						{/if}
                    </div>
			    {/foreach}
			{/if}
        </div>
        <div class="show-news">
            <a href="/news/">{if $lang == 'ru'}Показать все новости{else}See all news{/if}</a>
        </div>
    </div>
    
    <div class="container news enc-block">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="block-theme">
                    <h2>{if $lang == 'ru'}Энциклопедия{else}Encyclopedia{/if}</h2>
                </div>
                <div class="row">
				    {if $lang == 'ru'}
					    {foreach from=$articles item=article}
                            <div class="col-sm-6">
                                <h1><a href="/articles/article/{$article.id}/">{$article.title_ru}</a></h1>
                                <a href="/articles/article/{$article.id}/"><img src="/documents/articles/m/{$article.poster}" alt=""></a>
                            </div>
						{/foreach}
					{else}
					    {foreach from=$articles item=article}
                            <div class="col-sm-6">
                                <h1><a href="/articles/article/{$article.id}/">{$article.title_en}</a></h1>
                                <a href="/articles/article/{$article.id}/"><img src="/documents/articles/m/{$article.poster}" alt=""></a>
                            </div>
						{/foreach}
					{/if}
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 quality">
                <div class="quality-wrapper">
			        {if isset($pools[0])}
				        {if $lang == 'ru'}
                            <h1>{$pools[0].title_ru}</h1>
                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                {foreach from=$pools[0].answers.ru item=answer key=k}
								    <div class="rating">
                                        <div class="rat-rad">
                                            {if isset($pools[0].already.answer)}
											    {if $k == $pools[0].already.answer}
												    <input type="radio" checked disabled name="rating" value="{$k}" onclick="clickradio(this);"/>
												{else}
												    <input type="radio" name="rating" disabled value="{$k}" onclick="clickradio(this);"/>
												{/if}
												<label><h3>{$answer}</h3></label>
											{else}
											    {if $k == 0}
												    <input type="radio" name="rating" checked value="{$k}" onclick="clickradio(this);"/>
												{else}
												    <input type="radio" name="rating" value="{$k}" onclick="clickradio(this);"/>
												{/if}
												<label onclick="clickradiolabel(this);"><h3>{$answer}</h3></label>
											{/if}
                                        </div>
                                    </div>
								{/foreach}
                                <div class="ask">
                                    <div class="col-xs-6">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Результаты</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Другие опросы</a></h6>
                                    </div>
                                    <div class="col-xs-6">
                                        {if isset($pools[0].already.answer)}<input type="button" class="ask-btn" disabled value="Отвечен" style="background: transparent !important;"/>{else}<input type="submit" class="ask-btn" value="Ответить" data-item="Отвечен"/>{/if}
                                    </div>
                                </div>
								<input type="hidden" name="id" value="{$pools[0].id}" />
                            </form>
						{else}
                            <h1>{$pools[0].title_en}</h1>
                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                {foreach from=$pools[0].answers.en item=answer key=k}
								    <div class="rating">
                                        <div class="rat-rad">
                                            {if isset($pools[0].already.answer)}
											    {if $k == $pools[0].already.answer}
												    <input type="radio" checked disabled name="rating" value="{$k}" onclick="clickradio(this);"/>
												{else}
												    <input type="radio" name="rating" disabled value="{$k}" onclick="clickradio(this);"/>
												{/if}
												<label><h3>{$answer}</h3></label>
											{else}
											    {if $k == 0}
												    <input type="radio" name="rating" checked value="{$k}" onclick="clickradio(this);"/>
												{else}
												    <input type="radio" name="rating" value="{$k}" onclick="clickradio(this);"/>
												{/if}
												<label onclick="clickradiolabel(this);"><h3>{$answer}</h3></label>
											{/if}
                                        </div>
                                    </div>
								{/foreach}
                                <div class="ask">
                                    <div class="col-xs-6">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Results</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Other pools</a></h6>
                                    </div>
                                    <div class="col-xs-6">
                                        {if isset($pools[0].already.answer)}<input type="button" class="ask-btn" disabled value="Already" style="background: transparent !important;"/>{else}<input type="submit" class="ask-btn" value="Ok" data-item="Already"/>{/if}
                                    </div>
                                </div>
								<input type="hidden" name="id" value="{$pools[0].id}" />
                            </form>
						{/if}
					{/if}
                </div>
            </div>
        </div>
    </div>