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
							   Слайды
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         {if isset($slider.0)}
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
											<th>Категория товара</th>
											<th>ID товара</th>
                                            <th style="width: 180px;">Действия</th>
                                        </tr>
                                    </thead>
									    {foreach from=$slider item=item key=key}
                                    <tbody>
										    <tr id="adminrow-{$item.id}">
											     <td>{$item.title_ru}</td>
												 <td>{$item.title_en}</td>
												 <td>{$goods_cats[$item.good_cat]}</td>
												 <td>{$item.good_id}</td>
                                                 <td style="width: 180px;">
													  <button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="{$item.id}" title="Редактировать"><i class="fa fa-pencil"></i></button>
													  <button type="button" class="btn btn-danger btn-xs deleteitem" data-id="{$item.id}" title="Удалить"><i class="fa fa-times"></i></button>
													  {if $item.pos == 1}<button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-arrow-up"></i></button>{else}<button type="button" class="btn btn-success btn-xs positem" data-id="plus-{$item.id}"><i class="fa fa-arrow-up"></i></button>{/if}
													  {if !isset($slider[$key+1])}<button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-arrow-down"></i></button>{else}<button type="button" class="btn btn-success btn-xs positem" data-id="minus-{$item.id}"><i class="fa fa-arrow-down"></i></button>{/if}
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
                             Не найдено ни одного слайда.
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