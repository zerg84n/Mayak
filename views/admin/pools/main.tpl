        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{$title}</h1>
					  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <button type="button" class="btn btn-info btn-xs create_button" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> Добавить</button>
							   <i class="fa fa-th-list fa-fw"></i>
							   Опросы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         {if isset($pools.0)}
                            <div class="adminpagination">
							   {foreach from=$pages.pages item=page key=key}
							       {if $page >= 1 && $page <= $pages.pages[8]}
								    {if $key == 4}
									    <button type="button" class="btn btn-info btn-xs" title="{$pages.text[$key]}" onclick="adminpages({$page});">
								    {else}
									    <button type="button" class="btn btn-default btn-xs" title="{$pages.text[$key]}" onclick="adminpages({$page});">
									{/if}
								       {if $key > 1 && $key < 7}
									       {$page}
									    {else}
										    <i class="fa {$pages.text2[$key]}"></i>
										{/if}
									</button>
									{/if}
							   {/foreach}
							</div>
							    <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>На русском</th>
											<th>На английском</th>
                                            <th style="width: 180px;">Действия</th>
                                        </tr>
                                    </thead>
									    {foreach from=$pools item=item key=key}
                                    <tbody>
										<tr id="adminrow-{$item.id}">
											<td>
												{$item.title_ru}
												<br />
												<a href="#" class="admspoilerlink" data-item="{$item.id}" data-txt="Просмотр ответов" data-txt2="Скрыть ответы">Просмотр ответов</a>
												<br />
												<div id="admspoiler-{$item.id}-ru" class="admspoiler poolan">
												    {foreach from=$item.info.ru item=answer key=k}
													    <div class="poolablock">
														    <span style="font-size: 10px; color: #888888; float: right;">{$item.info.cnt[$k]} чел. / {$item.info.percent[$k]}%</span>{$answer}
														    <div class="pabg" style="background: {$item.info.color[$k]}; width: {$item.info.percent[$k]}%;"></div>
														</div>
													{/foreach}
												</div>
											</td>
											<td>
											    <span style="font-size: 12px; color: #888888; float: right;">Проголосовало: {$item.info.summ}</span>
												{$item.title_en}
												<br />
												<br />
												<div id="admspoiler-{$item.id}-en" class="admspoiler poolan">
												    {foreach from=$item.info.en item=answer key=k}
													    <div class="poolablock">
														    <span style="font-size: 10px; color: #888888; float: right;">{$item.info.cnt[$k]} чел. / {$item.info.percent[$k]}%</span>{$answer}
														    <div class="pabg" style="background: {$item.info.color[$k]}; width: {$item.info.percent[$k]}%;"></div>
														</div>
													{/foreach}
												</div>
											</td>
                                            <td style="width: 180px;">
												<button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="{$item.id}" title="Редактировать"><i class="fa fa-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs deleteitem" data-id="{$item.id}" title="Удалить"><i class="fa fa-times"></i></button>
												{if $item.visible == 0}
												    <button type="button" class="btn btn-info btn-xs showhide" data-id="{$item.id}" title="Показать"><i class="fa fa-eye"></i></button>
												{else}
												    <button type="button" class="btn btn-default btn-xs showhide" data-id="{$item.id}" title="Скрыть"><i class="fa fa-eye-slash"></i></button>
												{/if}
											</td>
                                        </tr>
                                    </tbody>
									    {/foreach}
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="adminpagination">
							   {foreach from=$pages.pages item=page key=key}
							       {if $page >= 1 && $page <= $pages.pages[8]}
								    {if $key == 4}
									    <button type="button" class="btn btn-info btn-xs" title="{$pages.text[$key]}" onclick="adminpages({$page});">
								    {else}
									    <button type="button" class="btn btn-default btn-xs" title="{$pages.text[$key]}" onclick="adminpages({$page});">
									{/if}
								       {if $key > 1 && $key < 7}
									       {$page}
									    {else}
										    <i class="fa {$pages.text2[$key]}"></i>
										{/if}
									</button>
									{/if}
							   {/foreach}
							</div>
                         {else}
                             Не найдено ни одного опроса.
                         {/if}
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->