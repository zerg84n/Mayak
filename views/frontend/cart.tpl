    <div class="bg">
        <h1 class="container theme-tab">
            {if $lang == 'ru'}Корзина{else}Cart{/if}
        </h1>
    </div>
    
    <div class="container article">
        <div class="content row">
            <div class="col-xs-12">
			    {if isset($cartitems.0)}
                    <form onsubmit="return false;">
                       <table class="basket-table">
                           <thead>
				    	       {if $lang == 'ru'}
                                   <th><h2>Фото</h2></th>
                                   <th><h2>Описание</h2></th>
                                   <th><h2>Стоимость</h2></th>
				    		   {else}
                                   <th><h2>Photo</h2></th>
                                   <th><h2>Description</h2></th>
                                   <th><h2>Summary</h2></th>
				    		   {/if}
                           </thead>
                           <tbody>
				    	   {if $lang == 'ru'}
				    	       {foreach from=$cartitems key=key item=good}
                                   <tr id="cartgood-{$key}">
                                       <td>
                                            <img src="/documents/goods/{$good->cat}/{$good->info.poster}" alt=""></td>
                                       <td>
				    					   <h3>Наименование: <a href="/catalogue/{$good->cat}/item/{$good->id}/">{$good->info.title_ru}</a></h3>
				    					   <h3>Количество: {$good->cnt} шт.</h3>
				    					   <h3>Цена за единицу: {$good->price} Р</h3>
				    					   {if $good->cat == 'goods_cat1'}
				    					       <h3>Ростовка: {$good->info.rostovka} см</h3>
				    						   <h3>Ширина: {$good->info.width} см</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat2'}
				    					       <h3>Размер: {$good->add}</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat3'}
				    					       <h3>Объём(в кубах): {$good->add}</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat4'}
				    					       <h3>Площадь в квадратах: {$good->add}</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat6'}
				    					       <h3>Объём: {$good->info.volume} л</h3>
				    					   {/if}
                                           <a class="cartdelete" href="#" data-id="{$key}"><input type="button" class="delete-bas"></a>
                                       </td>
                                       <td>
                                           <h3 class="cost-bas">{$good->summ} Р</h3>
                                       </td>
                                   </tr>
				    		   {/foreach}
				    	   {else}
				    	       {foreach from=$cartitems key=key item=good}
                                   <tr id="cartgood-{$key}">
                                       <td>
                                            <img src="/documents/goods/{$good->cat}/{$good->info.poster}" alt=""></td>
                                       <td>
				    					   <h3>Title: <a href="/catalogue/{$good->cat}/item/{$good->id}/">{$good->info.title_en}</a></h3>
				    					   <h3>Count: {$good->cnt} p.</h3>
				    					   <h3>Per one: {$good->price} Р</h3>
				    					   {if $good->cat == 'goods_cat1'}
				    					       <h3>Length: {$good->info.rostovka} sm</h3>
				    						   <h3>Width: {$good->info.width} sm</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat2'}
				    					       <h3>Size: {$good->add}</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat3'}
				    					       <h3>Volume(cubes): {$good->add}</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat4'}
				    					       <h3>Area(squares): {$good->add}</h3>
				    					   {/if}
				    					   {if $good->cat == 'goods_cat6'}
				    					       <h3>Volume: {$good->info.volume} l</h3>
				    					   {/if}
                                           <a class="cartdelete" href="#" data-id="{$key}"><input type="button" class="delete-bas"></a>
                                       </td>
                                       <td>
                                           <h3 class="cost-bas">{$good->summ} R</h3>
                                       </td>
                                   </tr>
				    		   {/foreach}
				    	   {/if}
				    	   </tbody>
                           <tfoot>
                               <tr>
                                   <td colspan="2">
                                        
                                   </td>
                                   <td>
				    			       {if $lang == 'ru'}
                                           <h2>Сумма заказа</h2>
                                           <h3 class="cost-bas" id="amount">{$cartsumm} Р</h3>
				    				   {else}
                                           <h2>Total amount</h2>
                                           <h3 class="cost-bas" id="amount">{$cartsumm} R</h3>
				    				   {/if}
                                   </td>
                               </tr>
                           </tfoot>
                       </table>
                       {if $lang == 'ru'}<input type="submit" class="formalize" value="Оформить заказ" data-toggle="modal" data-target="#modal-1">{else}<input type="submit" class="formalize" value="Checkout" data-toggle="modal" data-target="#modal-1">{/if}
                    </form>
				{else}
				    <h4>{if $lang == 'ru'}Корзина пуста.{else}Cart is empty.{/if}</h4>
				{/if}
            </div>
        </div>
    </div>