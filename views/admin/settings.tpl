        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Настройки</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-download fa-fw"></i>
							   Прайс-листы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						    <form enctype="multipart/form-data" method="POST" action="/admin/ajax/">
							    {foreach from=$pricelists key=key item=pl}
						        <div class="col-lg-3 form-group">
							        <label>{$pl.title} {$pl.status}</label>
									<input type="file" name="{$key}" />
							    </div>
								{/foreach}
								<input type="hidden" name="action" value="item-pricesupload" />
								<button type="submit" class="btn btn-default" style="display: block; clear: both; float: none; margin: 5px auto;">Применить</button>
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-list-alt fa-fw"></i>
							   Настройки сайта
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="settings_checkboxes" class="col-lg-6 form-group">
                                <label>Видимые категории товаров</label>
								<br />
								{if $ss_goods_cat1 == 0}<input type="checkbox" class="settings_checkbox" data-item="goods_cat1" />{else}<input type="checkbox" class="settings_checkbox" checked data-item="goods_cat1" />{/if} Лыжи и комплектующие
								<br />
								{if $ss_goods_cat2 == 0}<input type="checkbox" class="settings_checkbox" data-item="goods_cat2" />{else}<input type="checkbox" class="settings_checkbox" checked data-item="goods_cat2" />{/if} Черновые мебельные заготовки (ЧМЗ)
								<br />
								{if $ss_goods_cat3 == 0}<input type="checkbox" class="settings_checkbox" data-item="goods_cat3" />{else}<input type="checkbox" class="settings_checkbox" checked data-item="goods_cat3" />{/if} Трехслойная отделочная доска
								<br />
								{if $ss_goods_cat4 == 0}<input type="checkbox" class="settings_checkbox" data-item="goods_cat4" />{else}<input type="checkbox" class="settings_checkbox" checked data-item="goods_cat4" />{/if} Клееный пол
								<br />
								{if $ss_goods_cat5 == 0}<input type="checkbox" class="settings_checkbox" data-item="goods_cat5" />{else}<input type="checkbox" class="settings_checkbox" checked data-item="goods_cat5" />{/if} Мебель
								<br />
								{if $ss_goods_cat6 == 0}<input type="checkbox" class="settings_checkbox" data-item="goods_cat6" />{else}<input type="checkbox" class="settings_checkbox" checked data-item="goods_cat6" />{/if} КФК клей
								<br />
                            </div>
							<div class="col-lg-6 form-group changesitelogo" style="height: 180px;">
							    <label>Логотип</label>
								<br />
							    <img src="/documents/logo.png" />
								<form><input type="file" name="file" /></form>
							</div>
							<form id="settings-update">
							<input id="input_goods_cat1" type="hidden" name="goods_cat1" value="{$ss_goods_cat1}" />
							<input id="input_goods_cat2" type="hidden" name="goods_cat2" value="{$ss_goods_cat2}" />
							<input id="input_goods_cat3" type="hidden" name="goods_cat3" value="{$ss_goods_cat3}" />
							<input id="input_goods_cat4" type="hidden" name="goods_cat4" value="{$ss_goods_cat4}" />
							<input id="input_goods_cat5" type="hidden" name="goods_cat5" value="{$ss_goods_cat5}" />
							<input id="input_goods_cat6" type="hidden" name="goods_cat6" value="{$ss_goods_cat6}" />
                            {foreach from=$settings item=item}
                                {if $item.type == 'site'}
                                    <div class="form-group">
                                        <label>{$item.title}</label>
                                        {if $item.template == 'input'}
                                            <input class="form-control" name="{$item.option_alias}" value="{$item.value}" />
                                        {/if}
										{if $item.template == 'textarea'}
										    <textarea class="form-control" name="{$item.option_alias}">{$item.value}</textarea>
										{/if}
                                        {if $item.template == 'select'}
                                            <select class="form-control" name="{$item.option_alias}">
                                                {if $item.option_alias == 'hide_non_active'}
                                                    {if $item.value == 'Нет'}
                                                        <option value="Да">Да</option>
                                                        <option selected value="Нет">Нет</option>
                                                    {else}
                                                        <option selected value="Да">Да</option>
                                                        <option value="Нет">Нет</option>
                                                    {/if}
                                                {/if}
                                                {if $item.option_alias == 'advertisments'}
                                                    {if $item.value == 'Выключена'}
                                                        <option value="Включена">Включена</option>
                                                        <option selected value="Выключена">Выключена</option>
                                                    {else}
                                                        <option selected value="Включена">Включена</option>
                                                        <option value="Выключена">Выключена</option>
                                                    {/if}
                                                {/if}
                                            </select>
                                        {/if}
                                    </div>
                                {/if}
                            {/foreach}
							<div class="form-group">
							    <label>Язык по умолчанию</label>
                                <select class="form-control" name="default_lang">
                                    {if $ss_default_lang == 'ru'}
                                        <option selected value="ru">Русский</option>
                                        <option value="en">Английский</option>
                                    {else}
                                        <option value="ru">Русский</option>
                                        <option selected value="en">Английский</option>
                                    {/if}
                                </select>
							</div>
                            <div class="form-group">
                                <label>Текст на странице ошибки 404 (RU)</label>
                                <textarea id="textarea-description" class="form-control" rows="3" name="error_text_ru">{$ss_error_text_ru}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Текст на странице ошибки 404 (EN)</label>
                                <textarea id="textarea-description3" class="form-control" rows="3" name="error_text_en">{$ss_error_text_en}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Правила ухода за лыжами (RU)</label>
                                <textarea id="textarea-description2" class="form-control" rows="3" name="rules_expluatation_ru">{$ss_rules_expluatation_ru}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Правила ухода за лыжами (EN)</label>
                                <textarea id="textarea-description4" class="form-control" rows="3" name="rules_expluatation_en">{$ss_rules_expluatation_en}</textarea>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-envelope-o fa-fw"></i> Юридическая информация
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            {foreach from=$settings item=item}
                                {if $item.type == 'legal'}
                                    <div class="form-group">
                                        <label>{$item.title}</label>
                                        {if $item.template == 'input'}
                                            <input class="form-control" name="{$item.option_alias}" value="{$item.value}" />
                                        {/if}
                                    </div>
                                {/if}
                            {/foreach}
                            <div class="form-group">
                                <label>Полное наименование</label>
                                <textarea class="form-control" rows="3" name="legal_title">{$ss_legal_title}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Юридический адрес</label>
                                <textarea class="form-control" rows="3" name="legal_address">{$ss_legal_address}</textarea>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-phone-square fa-fw"></i>
							   Контактная информация
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            {foreach from=$settings item=item}
                                {if $item.type == 'contacts'}
                                    <div class="form-group">
                                        <label>{$item.title}</label>
                                        {if $item.template == 'input'}
                                            <input class="form-control" name="{$item.option_alias}" value="{$item.value}" />
                                        {/if}
                                    </div>
                                {/if}
                            {/foreach}
                            <div class="form-group">
                                <label>Физический адрес</label>
                                <textarea class="form-control" rows="3" name="address">{$ss_address}</textarea>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-wrench fa-fw"></i>
							   Настройки административной панели
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            {foreach from=$settings item=item}
                                {if $item.type == 'admin'}
                                    <div class="form-group">
                                        <label>{$item.title}</label>
                                        {if $item.template == 'input'}
                                            {if $item.option_alias == 'admin_password'}
                                                <input class="form-control" name="{$item.option_alias}" placeholder="******" />
                                            {else}
                                                <input class="form-control" name="{$item.option_alias}" value="{$item.value}" />
                                            {/if}
                                        {/if}
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
				<div class="col-lg-12" style="text-align: center; margin-bottom: 50px;">
                  <button type="submit" class="btn btn-default" style="margin-bottom: 15px;">Применить</button>
                  <div class="alert alert-success alert_success">Настройки применены!</div>
                  <div class="alert alert-danger alert_error">Неверно заполнена форма!</div>
              </div>
				</form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->