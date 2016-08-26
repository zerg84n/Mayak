    <div class="bg">
        <h1 class="container theme-tab">
            {if $lang == 'ru'}Ошибка!{else}Error!{/if}
        </h1>
    </div>
    
    <div class="container">
        {if $lang == 'ru'}
		    {$ss_error_text_ru}
		{else}
		    {$ss_error_text_en}
		{/if}
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