    <div class="bg">
        <h1 class="container theme-tab">
            {if $lang == 'ru'}{$item.title_ru}{else}{$item.title_en}{/if}
        </h1>
    </div>
    
    <div class="container">
        {if $lang == 'ru'}{$item.description_ru}{else}{$item.description_en}{/if}
    </div>
    
    <div class="bg slogan3">
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
</div>