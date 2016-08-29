<?php /* Smarty version Smarty-3.1.6, created on 2015-12-23 19:50:18
         compiled from "../views/admin\goods\goods_cat3\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42405642200e04e047-91942729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f55f4d175a5cd2f4afa9d9444323e8fe7a5a802' => 
    array (
      0 => '../views/admin\\goods\\goods_cat3\\main.tpl',
      1 => 1450876458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42405642200e04e047-91942729',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5642200e4e83a',
  'variables' => 
  array (
    'title' => 0,
    'goods' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
    'goods_cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642200e4e83a')) {function content_5642200e4e83a($_smarty_tpl) {?>        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
					  
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
							   Товары
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['goods']->value[0])){?>
                            <div class="adminpagination">
							   <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
							       <?php if ($_smarty_tpl->tpl_vars['page']->value>=1&&$_smarty_tpl->tpl_vars['page']->value<=$_smarty_tpl->tpl_vars['pages']->value['pages'][8]){?>
								    <?php if ($_smarty_tpl->tpl_vars['key']->value==4){?>
									    <button type="button" class="btn btn-info btn-xs" title="<?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
" onclick="adminpages(<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
);">
								    <?php }else{ ?>
									    <button type="button" class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
" onclick="adminpages(<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
);">
									<?php }?>
								       <?php if ($_smarty_tpl->tpl_vars['key']->value>1&&$_smarty_tpl->tpl_vars['key']->value<7){?>
									       <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

									    <?php }else{ ?>
										    <i class="fa <?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
"></i>
										<?php }?>
									</button>
									<?php }?>
							   <?php } ?>
							   </div>
							    <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Просмотры</th>
											<th>ID товара</th>
											<th>На русском</th>
											<th>На английском</th>
											<th>Ссылка для меню</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tbody>
										<tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                            <td style="font-size: 12px; color: #888888;"><?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['plural'];?>
</td>
											<td style="font-size: 12px; color: #888888;"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
											<td><a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['goods_cat']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title_ru'];?>
</a></td>
											<td><a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['goods_cat']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title_en'];?>
</a></td>
											<td style="color: #555555;">/catalogue/<?php echo $_smarty_tpl->tpl_vars['goods_cat']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/</td>
                                            <td>
											    <button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></button>
											    <button type="button" class="btn btn-danger btn-xs deleteitem" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Удалить"><i class="fa fa-times"></i></button>
											</td>
                                        </tr>
                                    </tbody>
									    <?php } ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="adminpagination">
							   <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
							       <?php if ($_smarty_tpl->tpl_vars['page']->value>=1&&$_smarty_tpl->tpl_vars['page']->value<=$_smarty_tpl->tpl_vars['pages']->value['pages'][8]){?>
								    <?php if ($_smarty_tpl->tpl_vars['key']->value==4){?>
									    <button type="button" class="btn btn-info btn-xs" title="<?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
" onclick="adminpages(<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
);">
								    <?php }else{ ?>
									    <button type="button" class="btn btn-default btn-xs" title="<?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
" onclick="adminpages(<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
);">
									<?php }?>
								       <?php if ($_smarty_tpl->tpl_vars['key']->value>1&&$_smarty_tpl->tpl_vars['key']->value<7){?>
									       <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

									    <?php }else{ ?>
										    <i class="fa <?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
"></i>
										<?php }?>
									</button>
									<?php }?>
							   <?php } ?>
							   </div>
                         <?php }else{ ?>
                             Не найдено ни одного товара.
                         <?php }?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper --><?php }} ?>