    <div class="bg">
        <h1 class="container theme-tab">
            {if $lang == 'ru'}{$newsitem.title_ru}{else}{$newsitem.title_en}{/if}
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
            <div class="col-md-9 article-right">
                <div class="article-right-block">
				    {if $lang == 'ru'}
                        <h2>{$newsitem.title_ru}</h2>
                        <img src="/documents/articles/{$newsitem.poster}" alt="">
                        {$newsitem.description_ru}
					{else}
                        <h2>{$newsitem.title_en}</h2>
                        <img src="/documents/articles/{$newsitem.poster}" alt="">
                        {if $newsitem.description_en == ''}
						    <div class="langnotify">
							    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
							</div>
							{$newsitem.description_ru}
						{else}
						    {$newsitem.description_en}
						{/if}
					{/if}
                </div>
                <div class="art-plug">
                    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="facebook,twitter,vkontakte,odnoklassniki" data-yashareTheme="counter"></div>
                    {literal}<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>{/literal}
                </div>
            </div>
        </div>
    </div>
</div>