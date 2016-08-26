    <div class="bg">
        <h1 class="container theme-tab">{if $lang == 'ru'}Новости{else}News{/if}</h1>
    </div>
    
    <div class="container article">
        <div class="row">
            <div class="col-md-3 article-left">
			    {if isset($pools[0])}
				    {if $lang == 'ru'}
                        <div class="quality">
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
                                <div class="ask row">
                                    <div class="col-xs-12">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Результаты</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Другие опросы</a></h6>
                                    </div>
                                    <div class="col-xs-12">
                                        {if isset($pools[0].already.answer)}<input type="button" class="ask-btn" disabled value="Отвечен" style="background: transparent !important;"/>{else}<input type="submit" class="ask-btn" value="Ответить" data-item="Отвечен"/>{/if}
                                    </div>
                                </div>
								<input type="hidden" name="id" value="{$pools[0].id}" />
                            </form>
                        </div>
					{else}
                        <div class="quality">
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
                                <div class="ask row">
                                    <div class="col-xs-12">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Results</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Other pools</a></h6>
                                    </div>
                                    <div class="col-xs-12">
                                        {if isset($pools[0].already.answer)}<input type="button" class="ask-btn" disabled value="Already" style="background: transparent !important;"/>{else}<input type="submit" class="ask-btn" value="Ok" data-item="Already"/>{/if}
                                    </div>
                                </div>
								<input type="hidden" name="id" value="{$pools[0].id}" />
                            </form>
                        </div>
					{/if}
				{/if}
            </div>
            <div class="col-md-9 article-right news">
			    {if $lang == 'ru'}
			        {foreach from=$news item=newsitem}
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/news/article/{$newsitem.id}/';">{$newsitem.title_ru}</h2>
                            <div class="date-news"> 
                                <img src="{$templateWebPath}images/date-news.png" alt="">
                                <h6>{$newsitem.whenadd_ru}</h6>
                            </div>
                            <a href="/news/article/{$newsitem.id}/"><img src="/documents/news/{$newsitem.poster}" alt=""></a>
                            {$newsitem.small_description_ru}
				        	<br />
				        	<a href="/news/article/{$newsitem.id}/">Читать полностью</a>
                        </div>
				    {/foreach}
				{else}
			        {foreach from=$news item=newsitem}
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/news/article/{$newsitem.id}/';">{$newsitem.title_en}</h2>
                            <div class="date-news"> 
                                <img src="{$templateWebPath}images/date-news.png" alt="">
                                <h6>{$newsitem.whenadd_en}</h6>
                            </div>
                            <a href="/news/article/{$newsitem.id}/"><img src="/documents/news/{$newsitem.poster}" alt=""></a>
                            {if $newsitem.small_description_en == ''}
							    <div class="langnotify">
								    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
								</div>
								{$newsitem.small_description_ru}
							{else}
							    {$newsitem.small_description_en}
							{/if}
				        	<br />
				        	<a href="/news/article/{$newsitem.id}/">Read full</a>
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
                                            <li><a href="/news/{$page}/" class="active">{$pages.text[$key]}</a></li>
                                        {else}
                                            <li><a href="/news/{$page}/">{$pages.text[$key]}</a></li>
							    		{/if}
                                    {/if}
                                {/foreach}
							{else}
							    {foreach from=$pages.pages item=page key=key}
                                    {if $page >= 1 && $page <= $pages.pages[8]}
                                        {if $key == 4}
                                            <li><a href="/news/{$page}/" class="active">{$pages.text2[$key]}</a></li>
                                        {else}
                                            <li><a href="/news/{$page}/">{$pages.text2[$key]}</a></li>
							    		{/if}
                                    {/if}
                                {/foreach}
							{/if}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>