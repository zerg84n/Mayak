    <div class="bg">
        <h1 class="container theme-tab">
            {if $lang == 'ru'}{$title_ru}{else}{$title_en}{/if}
        </h1>
    </div>
    
    <div class="container article">
        <div class="row">
		    {if $lang == 'ru'}
                <div class="col-md-3 col-xs-12 article-left alphabet-sort">
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="hunting">
                        <h2>Охота</h2>
                        <a href="#">Все</a>
                        <a href="#">А</a>
                        <a href="#">Б</a>
                        <a href="#">В</a>
                        <a href="#">Г</a>
                        <a href="#">Д</a>
                        <a href="#">Е</a>
                        <a href="#">Ж</a>
                        <a href="#">З</a>
                        <a href="#">И</a>
                        <a href="#">К</a>
                        <a href="#">Л</a>
                        <a href="#">М</a>
                        <a href="#">Н</a>
                        <a href="#">О</a>
                        <a href="#">П</a>
                        <a href="#">Р</a>
                        <a href="#">С</a>
                        <a href="#">Т</a>
                        <a href="#">У</a>
                        <a href="#">Ф</a>
                        <a href="#">Х</a>
                        <a href="#">Ч</a>
                        <a href="#">Ш</a>
                        <a href="#">Щ</a>
                        <a href="#">Ъ</a>
                        <a href="#">Ь</a>
                        <a href="#">Э</a>
                        <a href="#">Ю</a>
                        <a href="#">Я</a>
                    </div>
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="fishing">
                        <h2>Рыбалка</h2>
                        <a href="#">Все</a>
                        <a href="#">А</a>
                        <a href="#">Б</a>
                        <a href="#">В</a>
                        <a href="#">Г</a>
                        <a href="#">Д</a>
                        <a href="#">Е</a>
                        <a href="#">Ж</a>
                        <a href="#">З</a>
                        <a href="#">И</a>
                        <a href="#">К</a>
                        <a href="#">Л</a>
                        <a href="#">М</a>
                        <a href="#">Н</a>
                        <a href="#">О</a>
                        <a href="#">П</a>
                        <a href="#">Р</a>
                        <a href="#">С</a>
                        <a href="#">Т</a>
                        <a href="#">У</a>
                        <a href="#">Ф</a>
                        <a href="#">Х</a>
                        <a href="#">Ч</a>
                        <a href="#">Ш</a>
                        <a href="#">Щ</a>
                        <a href="#">Ъ</a>
                        <a href="#">Ь</a>
                        <a href="#">Э</a>
                        <a href="#">Ю</a>
                        <a href="#">Я</a>
                    </div>
                </div>
			{else}
                <div class="col-md-3 col-xs-12 article-left alphabet-sort">
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="hunting">
                        <h2>Hunting</h2>
                        <a href="#">All</a>
                        <a href="#">A</a>
                        <a href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">M</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">V</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </div>
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="fishing">
                        <h2>Fishing</h2>
                        <a href="#">All</a>
                        <a href="#">A</a>
                        <a href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">M</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">V</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </div>
                </div>
			{/if}
			{if isset($news[0])}
            <div class="col-md-9 article-right">
			    {if $lang == 'ru'}
			        {foreach from=$news item=newsitem}
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/articles/article/{$newsitem.id}/';">{$newsitem.title_ru}</h2>
                            <a href="/articles/article/{$newsitem.id}/"><img src="/documents/articles/{$newsitem.poster}" alt=""></a>
                            {$newsitem.small_description_ru}
				        	<br />
				        	<a href="/articles/article/{$newsitem.id}/">Читать полностью</a>
                        </div>
				    {/foreach}
				{else}
			        {foreach from=$news item=newsitem}
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/articles/article/{$newsitem.id}/';">{$newsitem.title_en}</h2>
                            <a href="/articles/article/{$newsitem.id}/"><img src="/documents/articles/{$newsitem.poster}" alt=""></a>
                            {if $newsitem.small_description_en == ''}
							    <div class="langnotify">
								    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
								</div>
								{$newsitem.small_description_ru}
							{else}
							    {$newsitem.small_description_en}
							{/if}
				        	<br />
				        	<a href="/articles/article/{$newsitem.id}/">Read full</a>
                        </div>
				    {/foreach}
				{/if}
                <div class="article-pagginator">
                    <div class="col-md-6 col-sm-6 col-xs-12 art-show">
                        <h4>{if $lang == 'ru'}Показывать по{else}Per page{/if}</h4>
                        <div class="select sel-menu sel-pag npp-app-select">
                            <div class="sel-select">
                                <h5>{$npp}</h5>
                                <img src="{$templateWebPath}images/sel2.png" alt="">
                            </div>
                            <div class="sel-option">
                                <ul>
								    {foreach from=$nppch item=np}<li><h4>{$np}</h4></li>{/foreach}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 art-pagg">
                        <ul>
                            {if $lang == 'ru'}
							    {foreach from=$pages.pages item=page key=key}
                                    {if $page >= 1 && $page <= $pages.pages[8]}
                                        {if $key == 4}
                                            <li><a href="/articles/{$page}/" class="active">{$pages.text[$key]}</a></li>
                                        {else}
                                            <li><a href="/articles/{$page}/">{$pages.text[$key]}</a></li>
							    		{/if}
                                    {/if}
                                {/foreach}
							{else}
							    {foreach from=$pages.pages item=page key=key}
                                    {if $page >= 1 && $page <= $pages.pages[8]}
                                        {if $key == 4}
                                            <li><a href="/articles/{$page}/" class="active">{$pages.text2[$key]}</a></li>
                                        {else}
                                            <li><a href="/articles/{$page}/">{$pages.text2[$key]}</a></li>
							    		{/if}
                                    {/if}
                                {/foreach}
							{/if}
                        </ul>
                    </div>
                </div>
            </div>
			{else}
            <div class="col-md-9 article-right">
                <div class="article-right-block">
				    {if $lang == 'ru'}
                        <h2>Статьи не найдены</h2>
                        <div class="art-not-found">
                            <h1>Статьи по запрашиваемым тегам не найдены</h1>
                        </div>
					{else}
                        <h2>Articles not found</h2>
                        <div class="art-not-found">
                            <h1>Articles with such parameters were not found</h1>
                        </div>
					{/if}
                </div>
            </div>
			{/if}
        </div>
    </div>