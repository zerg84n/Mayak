<?php /* Smarty version Smarty-3.1.6, created on 2015-11-23 18:08:17
         compiled from "../views/admin\menu\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55295624d486f33e46-06480683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9616f3ee31b11218cae037e52cc6a626af0d8f75' => 
    array (
      0 => '../views/admin\\menu\\main.tpl',
      1 => 1448280003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55295624d486f33e46-06480683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d4874c865',
  'variables' => 
  array (
    'title' => 0,
    'menu' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d4874c865')) {function content_5624d4874c865($_smarty_tpl) {?>        <div id="page-wrapper">
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
                            <!--<button type="button" class="btn btn-info btn-xs create_button" data-toggle="modal" data-target="#form"><i class="fa fa-plus"></i> Добавить</button>-->
							   <i class="fa fa-th-list fa-fw"></i>
							   Пункты меню
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['menu']->value[0])){?>
						    <!--
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
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
										    <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
											     <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_ru'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title_ru'];?>
</a><br /><?php echo $_smarty_tpl->tpl_vars['item']->value['link_ru'];?>
</td>
												 <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link_en'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title_en'];?>
</a><br /><?php echo $_smarty_tpl->tpl_vars['item']->value['link_en'];?>
</td>
                                                 <td style="width: 180px;">
													  <button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></button>
													  <!--<button type="button" class="btn btn-danger btn-xs deleteitem" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Удалить"><i class="fa fa-times"></i></button>-->
													  <?php if ($_smarty_tpl->tpl_vars['item']->value['pos']==1){?><button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-arrow-up"></i></button><?php }else{ ?><button type="button" class="btn btn-success btn-xs positem" data-id="plus-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-arrow-up"></i></button><?php }?>
													  <?php if (!isset($_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['key']->value+1])){?><button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-arrow-down"></i></button><?php }else{ ?><button type="button" class="btn btn-success btn-xs positem" data-id="minus-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-arrow-down"></i></button><?php }?>
											     </td>
                                            </tr>
									    <?php } ?>
									</tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<!--
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
							-->
                         <?php }else{ ?>
                             Не найдено ни одного пункта меню.
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