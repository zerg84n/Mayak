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
                            <!--<button type="button" class="btn btn-info btn-xs create_button" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> Добавить</button>-->
							   <i class="fa fa-th-list fa-fw"></i>
							   Пункты меню
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         {if isset($menu.0)}
						    <!--
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
							-->
							    <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>На русском</th>
											<th>На английском</th>
                                            <th style="width: 180px;">Действия</th>
                                        </tr>
                                    </thead>
									<tbody>
									    {foreach from=$menu item=item key=key}
										    <tr id="adminrow-{$item.id}">
											     <td><a href="{$item.link_ru}" target="_blank">{$item.title_ru}</a><br />{$item.link_ru}</td>
												 <td><a href="{$item.link_en}" target="_blank">{$item.title_en}</a><br />{$item.link_en}</td>
                                                 <td style="width: 180px;">
													  <button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="{$item.id}" title="Редактировать"><i class="fa fa-pencil"></i></button>
													  <!--<button type="button" class="btn btn-danger btn-xs deleteitem" data-id="{$item.id}" title="Удалить"><i class="fa fa-times"></i></button>-->
													  {if $item.pos == 1}<button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-arrow-up"></i></button>{else}<button type="button" class="btn btn-success btn-xs positem" data-id="plus-{$item.id}"><i class="fa fa-arrow-up"></i></button>{/if}
													  {if !isset($menu[$key+1])}<button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-arrow-down"></i></button>{else}<button type="button" class="btn btn-success btn-xs positem" data-id="minus-{$item.id}"><i class="fa fa-arrow-down"></i></button>{/if}
											     </td>
                                            </tr>
									    {/foreach}
									</tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<!--
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
							-->
                         {else}
                             Не найдено ни одного пункта меню.
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