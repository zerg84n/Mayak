                {if $lang == 'ru'}
                    <div class="w-header">
                        <h1>Результаты опроса</h1>
                        <h2>{$pool.title_ru}</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            {foreach from=$pool.answers.ru item=answer key=k}
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3>{$answer} {$pool.answers.percent[$k]}% ({$pool.answers.cnt[$k]})</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: {$pool.answers.percent[$k]}%; background: {$pool.answers.color[$k]};"></div>
                                </div>
                            </li>
			    			{/foreach}
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">Всего ответов: {$poolscnt}</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">ВЕРНУТЬСЯ НАЗАД</button>
                    </div>
			    {else}
                    <div class="w-header">
                        <h1>Pool result</h1>
                        <h2>{$pool.title_en}</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            {foreach from=$pool.answers.en item=answer key=k}
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3>{$answer} {$pool.answers.percent[$k]}% ({$pool.answers.cnt[$k]})</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: {$pool.answers.percent[$k]}%; background: {$pool.answers.color[$k]};"></div>
                                </div>
                            </li>
			    			{/foreach}
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">All answers: {$poolscnt}</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">BACK</button>
                    </div>
			    {/if}