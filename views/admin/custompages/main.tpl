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
							   Текстовые страницы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         {if isset($custompages.0)}
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
                                            <th>Просмотры</th>
											<th>На русском</th>
											<th>На английском</th>
											<th>Ссылка для меню</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
									    {foreach from=$custompages item=item}
                                    <tbody>
                                        {if $item.score == 'Неизвестно'}
										        <tr id="adminrow-{$item.id}" class="warning">
										    {else}
										        <tr id="adminrow-{$item.id}">
											{/if}
											<td style="font-size: 12px; color: #888888;">{$item.score} {$item.plural}</td>
											<td><a href="{$item.link_ru}" target="_blank">{$item.title_ru}</a></td>
											<td><a href="{$item.link_en}" target="_blank">{$item.title_en}</a></td>
											<td style="color: #555555;">RU: {$item.link_ru}<br />EN: {$item.link_en}</td>
                                            <td>
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
                             Не найдено ни одной страницы.
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