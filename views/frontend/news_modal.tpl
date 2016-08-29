    <div class="modal fade whitebg" id="modal-pool1">
        <div class="container">
		    <div id="pools-add-results" class="modal-poolcontent">
                {if $lang == 'ru'}
                    <div class="w-header">
                        <h1>Результаты опроса</h1>
                        <h2>{$pools[0].title_ru}</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            {foreach from=$pools[0].answers.ru item=answer key=k}
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3>{$answer} {$pools[0].answers.percent[$k]}% ({$pools[0].answers.cnt[$k]})</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: {$pools[0].answers.percent[$k]}%; background: {$pools[0].answers.color[$k]};"></div>
                                </div>
                            </li>
			    			{/foreach}
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">Всего ответов: {$poolscnt[0]}</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">ВЕРНУТЬСЯ НАЗАД</button>
                    </div>
			    {else}
                    <div class="w-header">
                        <h1>Pool result</h1>
                        <h2>{$pools[0].title_en}</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            {foreach from=$pools[0].answers.en item=answer key=k}
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3>{$answer} {$pools[0].answers.percent[$k]}% ({$pools[0].answers.cnt[$k]})</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: {$pools[0].answers.percent[$k]}%; background: {$pools[0].answers.color[$k]};"></div>
                                </div>
                            </li>
			    			{/foreach}
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">All answers: {$poolscnt[0]}</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">BACK</button>
                    </div>
			    {/if}
			</div>
        </div>
    </div>
    
    <div class="modal fade whitebg" id="modal-pool2">
        <div class="container">
            <div class="modal-poolcontent">
                <div class="w-header">
                    <h1>{if $lang == 'ru'}Другие опросы{else}Other pools{/if}</h1>
                </div>
                <div class="w-body">
                    <div class="other-ask">
					    {if $lang == 'ru'}
                            {foreach from=$pools item=pool key=k}
								<h3 class="other-pools-hide"><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool3" onclick="pooladdhidcontent(this,{$k});return false;">{$pool.title_ru}</a></h3>
								<div class="pool-hidden-content">
                                    <div class="w-header">
                                        <h1>Опрос</h1>
                                        <h2>{$pool.title_ru}</h2>
                                    </div>
                                    <div class="w-body row">
                                        <div class="col-lg-offset-4 col-sm-offset-3 col-xs-offset-1 col-md-7 col-md-offset-3 col-lg-5 col-sm-8 col-xs-10 variants">
                                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                    			{foreach from=$pool.answers.ru item=answer key=k2}
                                                    <div class="rating">
                                                        <div class="rat-rad">
                                                            {if isset($pool.already.answer)}
                                                    		    {if $k2 == $pool.already.answer}
                                                    			    <input type="radio" checked disabled name="rating" value="{$k2}" onclick="clickradio(this);"/>
                                                    			{else}
                                                    			    <input type="radio" name="rating" disabled value="{$k2}" onclick="clickradio(this);"/>
                                                    			{/if}
                                                    			<label><h3>{$answer}</h3></label>
                                                    		{else}
                                                    		    {if $k2 == 0}
                                                    			    <input type="radio" name="rating" checked value="{$k2}" onclick="clickradio(this);"/>
                                                    			{else}
                                                    			    <input type="radio" name="rating" value="{$k2}" onclick="clickradio(this);"/>
                                                    			{/if}
                                                    			<label onclick="clickradiolabel(this);"><h3>{$answer}</h3></label>
                                                    		{/if}
                                                        </div>
                                                    </div>
                                    			{/foreach}
                                                <div class="col-xs-12">
                                                    <ul class="other-link">
                                                        <li><a href="#" class="underline" onclick="return false;">Всего ответов {$poolscnt[$k]}</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool1" onclick="pooladdhidresult({$k});return false;">Результаты</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Другие опросы</a></li>
                                                    </ul>
                                                </div>
												<input type="hidden" name="id" value="{$pool.id}" />
                                                <div class="col-xs-10 col-sm-11 col-md-12">
                                                    <div class="link-btn">
                                                        {if isset($pool.already.answer)}<input type="button" class="answer" disabled value="ОТВЕЧЕН" style="background: transparent !important;"/>{else}<input type="submit" class="answer" value="ОТВЕТИТЬ"/>{/if}
                                                        <button class="back-btn back-btn-empty" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2">ВЕРНУТЬСЯ НАЗАД</button>
                                                    </div>
                                                </div>
											</form>
                                        </div>
                                    </div>
								</div>
								<div class="pool-hidden-results">
                                    <div class="w-header">
                                        <h1>Результаты опроса</h1>
                                        <h2>{$pool.title_ru}</h2>
                                    </div>
                                    <div class="w-body">
                                        <ul class="opros">
                                            {foreach from=$pool.answers.ru item=answer2 key=k2}
                                    		<li>
                                                <div class="col col-sm-3 col-sm-offset-2">
                                                    <h3>{$answer2} {$pool.answers.percent[$k2]}% ({$pool.answers.cnt[$k2]})</h3>
                                                </div>
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="procent" style="width: {$pool.answers.percent[$k2]}%; background: {$pool.answers.color[$k2]};"></div>
                                                </div>
                                            </li>
                                    		{/foreach}
                                        </ul>
                                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">Всего ответов: {$poolscnt[$k]}</a></h3>
                                        <button class="back-btn" type="button" onclick="fillcurpool();closeline();">ВЕРНУТЬСЯ НАЗАД</button>
                                    </div>
								</div>
					    	{/foreach}
					    {else}
                            {foreach from=$pools item=pool key=k}
								<h3 class="other-pools-hide"><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool3" onclick="pooladdhidcontent(this,{$k});return false;">{$pool.title_en}</a></h3>
								<div class="pool-hidden-content">
                                    <div class="w-header">
                                        <h1>Pool</h1>
                                        <h2>{$pool.title_en}</h2>
                                    </div>
                                    <div class="w-body row">
                                        <div class="col-lg-offset-4 col-sm-offset-3 col-xs-offset-1 col-md-7 col-md-offset-3 col-lg-5 col-sm-8 col-xs-10 variants">
                                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                    			{foreach from=$pool.answers.en item=answer key=k2}
                                                    <div class="rating">
                                                        <div class="rat-rad">
                                                            {if isset($pool.already.answer)}
                                                    		    {if $k2 == $pool.already.answer}
                                                    			    <input type="radio" checked disabled name="rating" value="{$k2}" onclick="clickradio(this);"/>
                                                    			{else}
                                                    			    <input type="radio" name="rating" disabled value="{$k2}" onclick="clickradio(this);"/>
                                                    			{/if}
                                                    			<label><h3>{$answer}</h3></label>
                                                    		{else}
                                                    		    {if $k2 == 0}
                                                    			    <input type="radio" name="rating" checked value="{$k2}" onclick="clickradio(this);"/>
                                                    			{else}
                                                    			    <input type="radio" name="rating" value="{$k2}" onclick="clickradio(this);"/>
                                                    			{/if}
                                                    			<label onclick="clickradiolabel(this);"><h3>{$answer}</h3></label>
                                                    		{/if}
                                                        </div>
                                                    </div>
                                    			{/foreach}
                                                <div class="col-xs-12">
                                                    <ul class="other-link">
                                                        <li><a href="#" class="underline" onclick="return false;">All answers {$poolscnt[$k]}</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool1" onclick="pooladdhidresult({$k});return false;">Results</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Other pools</a></li>
                                                    </ul>
                                                </div>
												<input type="hidden" name="id" value="{$pool.id}" />
                                                <div class="col-xs-10 col-sm-11 col-md-12">
                                                    <div class="link-btn">
                                                        {if isset($pool.already.answer)}<input type="button" class="answer" disabled value="ALREADY" style="background: transparent !important;"/>{else}<input type="submit" class="answer" value="OK"/>{/if}
                                                        <button class="back-btn back-btn-empty" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2">BACK</button>
                                                    </div>
                                                </div>
											</form>
                                        </div>
                                    </div>
								</div>
								<div class="pool-hidden-results">
                                    <div class="w-header">
                                        <h1>Pool results</h1>
                                        <h2>{$pool.title_en}</h2>
                                    </div>
                                    <div class="w-body">
                                        <ul class="opros">
                                            {foreach from=$pool.answers.en item=answer2 key=k2}
                                    		<li>
                                                <div class="col col-sm-3 col-sm-offset-2">
                                                    <h3>{$answer2} {$pool.answers.percent[$k2]}% ({$pool.answers.cnt[$k2]})</h3>
                                                </div>
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="procent" style="width: {$pool.answers.percent[$k2]}%; background: {$pool.answers.color[$k2]};"></div>
                                                </div>
                                            </li>
                                    		{/foreach}
                                        </ul>
                                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">All answers: {$poolscnt[$k]}</a></h3>
                                        <button class="back-btn" type="button" onclick="fillcurpool();closeline();">BACK</button>
                                    </div>
								</div>
					    	{/foreach}
					    {/if}
                    </div>
                    <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();">{if $lang == 'ru'}ВЕРНУТЬСЯ НАЗАД{else}BACK{/if}</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade whitebg" id="modal-pool3">
        <div class="container">
            <div id="pool-add-content" class="modal-poolcontent"></div>
        </div>
    </div>