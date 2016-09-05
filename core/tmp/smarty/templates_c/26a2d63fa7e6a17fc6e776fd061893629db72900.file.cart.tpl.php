<?php /* Smarty version Smarty-3.1.6, created on 2016-09-05 18:37:57
         compiled from "../views/frontend\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2634156aa06eead59c8-55444362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a2d63fa7e6a17fc6e776fd061893629db72900' => 
    array (
      0 => '../views/frontend\\cart.tpl',
      1 => 1473082665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2634156aa06eead59c8-55444362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa06eec3a97',
  'variables' => 
  array (
    'lang' => 0,
    'cartitems' => 0,
    'key' => 0,
    'good' => 0,
    'cartsumm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa06eec3a97')) {function content_56aa06eec3a97($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Корзина<?php }else{ ?>Cart<?php }?>
        </h1>
    </div>
    
    <div class="container article">
        <div class="content row">
            <div class="col-xs-12">
			    <?php if (isset($_smarty_tpl->tpl_vars['cartitems']->value[0])){?>
                    <form onsubmit="return false;">
                       <table class="basket-table">
                           <thead>
				    	       <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                                   <th><h2>Фото</h2></th>
                                   <th><h2>Описание</h2></th>
                                   <th><h2>Стоимость</h2></th>
				    		   <?php }else{ ?>
                                   <th><h2>Photo</h2></th>
                                   <th><h2>Description</h2></th>
                                   <th><h2>Summary</h2></th>
				    		   <?php }?>
                           </thead>
                           <tbody>
				    	   <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
				    	       <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cartitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['good']->key;
?>
                                   <tr id="cartgood-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                       <td>
                                            <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['good']->value->cat;?>
/<?php echo $_smarty_tpl->tpl_vars['good']->value->info['poster'];?>
" alt=""></td>
                                       <td>
				    					   <h3>Наименование: <a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['good']->value->cat;?>
/item/<?php echo $_smarty_tpl->tpl_vars['good']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['good']->value->info['title_ru'];?>
</a></h3>
				    					   <h3>Количество: <?php echo $_smarty_tpl->tpl_vars['good']->value->cnt;?>
 шт.</h3>
				    					   <h3>Цена за единицу: <?php echo $_smarty_tpl->tpl_vars['good']->value->price;?>
 Р</h3>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat1'){?>
				    					       <h3>Ростовка: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['rostovka'];?>
 см</h3>
				    						   <h3>Ширина: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['width'];?>
 см</h3>
                                                                                  <h3>Опции: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['options'];?>
</h3> 
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat2'){?>
				    					       <h3>Размер: <?php echo $_smarty_tpl->tpl_vars['good']->value->add;?>
</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat3'){?>
				    					       <h3>Объём(в кубах): <?php echo $_smarty_tpl->tpl_vars['good']->value->add;?>
</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat4'){?>
				    					       <h3>Площадь в квадратах: <?php echo $_smarty_tpl->tpl_vars['good']->value->add;?>
</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat6'){?>
				    					       <h3>Объём: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['volume'];?>
 л</h3>
				    					   <?php }?>
                                           <a class="cartdelete" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><input type="button" class="delete-bas"></a>
                                       </td>
                                       <td>
                                           <h3 class="cost-bas"><?php echo $_smarty_tpl->tpl_vars['good']->value->summ;?>
 Р</h3>
                                       </td>
                                   </tr>
				    		   <?php } ?>
				    	   <?php }else{ ?>
				    	       <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cartitems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['good']->key;
?>
                                   <tr id="cartgood-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                       <td>
                                            <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['good']->value->cat;?>
/<?php echo $_smarty_tpl->tpl_vars['good']->value->info['poster'];?>
" alt=""></td>
                                       <td>
				    					   <h3>Title: <a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['good']->value->cat;?>
/item/<?php echo $_smarty_tpl->tpl_vars['good']->value->id;?>
/"><?php echo $_smarty_tpl->tpl_vars['good']->value->info['title_en'];?>
</a></h3>
				    					   <h3>Count: <?php echo $_smarty_tpl->tpl_vars['good']->value->cnt;?>
 p.</h3>
				    					   <h3>Per one: <?php echo $_smarty_tpl->tpl_vars['good']->value->price;?>
 Р</h3>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat1'){?>
				    					       <h3>Length: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['rostovka'];?>
 sm</h3>
				    						   <h3>Width: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['width'];?>
 sm</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat2'){?>
				    					       <h3>Size: <?php echo $_smarty_tpl->tpl_vars['good']->value->add;?>
</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat3'){?>
				    					       <h3>Volume(cubes): <?php echo $_smarty_tpl->tpl_vars['good']->value->add;?>
</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat4'){?>
				    					       <h3>Area(squares): <?php echo $_smarty_tpl->tpl_vars['good']->value->add;?>
</h3>
				    					   <?php }?>
				    					   <?php if ($_smarty_tpl->tpl_vars['good']->value->cat=='goods_cat6'){?>
				    					       <h3>Volume: <?php echo $_smarty_tpl->tpl_vars['good']->value->info['volume'];?>
 l</h3>
				    					   <?php }?>
                                           <a class="cartdelete" href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><input type="button" class="delete-bas"></a>
                                       </td>
                                       <td>
                                           <h3 class="cost-bas"><?php echo $_smarty_tpl->tpl_vars['good']->value->summ;?>
 R</h3>
                                       </td>
                                   </tr>
				    		   <?php } ?>
				    	   <?php }?>
				    	   </tbody>
                           <tfoot>
                               <tr>
                                   <td colspan="2">
                                        
                                   </td>
                                   <td>
				    			       <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                                           <h2>Сумма заказа</h2>
                                           <h3 class="cost-bas" id="amount"><?php echo $_smarty_tpl->tpl_vars['cartsumm']->value;?>
 Р</h3>
				    				   <?php }else{ ?>
                                           <h2>Total amount</h2>
                                           <h3 class="cost-bas" id="amount"><?php echo $_smarty_tpl->tpl_vars['cartsumm']->value;?>
 R</h3>
				    				   <?php }?>
                                   </td>
                               </tr>
                           </tfoot>
                       </table>
                       <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><input type="submit" class="formalize" value="Оформить заказ" data-toggle="modal" data-target="#modal-1"><?php }else{ ?><input type="submit" class="formalize" value="Checkout" data-toggle="modal" data-target="#modal-1"><?php }?>
                    </form>
				<?php }else{ ?>
				    <h4><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Корзина пуста.<?php }else{ ?>Cart is empty.<?php }?></h4>
				<?php }?>
            </div>
        </div>
    </div><?php }} ?>