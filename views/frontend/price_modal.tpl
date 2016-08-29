      <div class="modal fade nowhitebg" id="modal-7">
        <div class="container">
            <div class="modal-content">
                <div class="w-header">
                    <h1>{if $lang == 'ru'}Скачать прайс-лист{else}Download price-list{/if}</h1>
                </div>
                <div class="w-body row">
                    <div class="tabs registrat">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-1" data-toggle="tab" OnClick="price_otype('fiz');">
                                <h3>{if $lang == 'ru'}Розница{else}Retail{/if}</h3>
                                </a></li>
                            <li><a href="#tab-2" data-toggle="tab" OnClick="price_otype('opt');">
                                    <h3>{if $lang == 'ru'}Опт{else}Wholesale{/if}</h3>
                                </a></li>
                        </ul>
                        <div class="tab-content col-sm-offset-2 col-sm-8">
                            <div class="tab-pane fade in active" id="tab-1">
                                <form id="fizprice" action="">
                                    {if $lang == 'ru'}<input type="submit" value="Скачать" class="enter-btn">{else}<input type="submit" value="Download" class="enter-btn">{/if}
                                </form>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <form id="optprice" action="">
								    {if $lang == 'ru'}
								        <input type="text" name="fio" required="required" placeholder="Ф.И.О.">
                                        <input type="text" name="email" required="required" placeholder="Электронная почта">
                                        <input type="submit" value="Скачать" class="enter-btn">
									{else}
								        <input type="text" name="fio" required="required" placeholder="Surname Name Lastname">
                                        <input type="text" name="email" required="required" placeholder="Email">
                                        <input type="submit" value="Download" class="enter-btn">
									{/if}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>