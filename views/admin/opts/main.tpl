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
							   <i class="fa fa-th-list fa-fw"></i>
							   Список оптовиков
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         {if isset($opts.0)}
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
                                            <th>Ф.И.О.</th>
                                            <th>Email</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
									    {foreach from=$opts item=item}
                                    <tbody>
                                        {if $item.visible == 0}
										        <tr id="adminrow-{$item.id}" class="danger">
										    {else}
										        <tr id="adminrow-{$item.id}">
											{/if}
                                            <td>{$item.title}</td>
											<td><a href="mailto:{$item.email}">{$item.email}</a></td>
											<td>
													  <button type="button" class="btn btn-danger btn-xs deleteitem" data-id="{$item.id}" title="Удалить"><i class="fa fa-times"></i></button>
													  {if $item.visible == 0}
													      <button type="button" class="btn btn-success btn-xs showhide" data-id="{$item.id}"><i class="fa fa-check"></i></button>
													  {else}
													      <button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-check"></i></button>
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
                             Не найдено ни одного оптовика.
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