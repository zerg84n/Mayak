    <div class="container">
        <div class="header row">
		    <div class="changelang">
			    <a href="#" data-lang="en">ENG</a> | <a href="#" data-lang="ru">RUS</a>
				<input id="currentlang" type="hidden" value="{$lang}" />
			</div>
            <div class="header-left col-md-5 col-sm-4 col-xs-4">
                <ul class="row">
                    <!--<li class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <a href="#">
                            <img src="{$templateWebPath}images/inter.png">
                            <h3>{if $lang == 'ru'}Войти{else}Login{/if}</h3>
                        </a>
                    </li>-->
                    <li class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                        <a href="/cart/">
                            <img src="{$templateWebPath}images/basket.png">
                            <h3 id="cartlink"><span id="cartsumm">{$cartsumm}</span> {if $lang == 'ru'}Р{else}R{/if}</h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logo col-md-2 col-sm-4 col-xs-4">
                <a href="/"><img src="/documents/logo.png" alt="Главная страница"></a>
            </div>
            <div class="header-right col-md-4 col-sm-3 col-sm-offset-1 col-xs-offset-1 col-xs-3">
                <h3>{$ss_phone}</h3>
                <img src="{$templateWebPath}images/telephone.png">
            </div>
        </div>
        <div class="navigation row">
            <div class="col-md-6 col-xs-12 nav-left">
			    {if $lang == 'ru'}
                    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-6 nav-left-1">
                        <h2><a href="{$menu[0].link_ru}">{$menu[0].title_ru}</a></h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-5 col-xs-6">
				    	<h2><a href="{$menu[1].link_ru}">{$menu[1].title_ru}</a></h2>
                    </div>
				{else}
                    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-6 nav-left-1">
                        <h2><a href="{$menu[0].link_en}">{$menu[0].title_en}</a></h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-5 col-xs-6">
				    	<h2><a href="{$menu[1].link_en}">{$menu[1].title_en}</a></h2>
                    </div>
				{/if}
            </div>
            <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 col-xs-12 nav-right">
			    {for $i = 2 to 4}
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
				        {if $lang == 'ru'}
					        <h2><a href="{$menu[$i].link_ru}">{$menu[$i].title_ru}</a></h2>
					    {else}
					        <h2><a href="{$menu[$i].link_en}">{$menu[$i].title_en}</a></h2>
					    {/if}
                    </div>
				{/for}
            </div>
        </div>
	</div>