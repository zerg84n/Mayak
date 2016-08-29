<?php /* Smarty version Smarty-3.1.6, created on 2015-11-15 22:02:01
         compiled from "../views/admin\pools\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25195648860c9ec936-29277804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45508be9eb817b37b978382054524fa54694f125' => 
    array (
      0 => '../views/admin\\pools\\main.tpl',
      1 => 1447603311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25195648860c9ec936-29277804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5648860ce29a4',
  'variables' => 
  array (
    'title' => 0,
    'pools' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
    'k' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5648860ce29a4')) {function content_5648860ce29a4($_smarty_tpl) {?>        <div id="page-wrapper">
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
							   Опросы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0])){?>
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
                                            <th>На русском</th>
											<th>На английском</th>
                                            <th style="width: 180px;">Действия</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tbody>
										<tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
											<td>
												<?php echo $_smarty_tpl->tpl_vars['item']->value['title_ru'];?>

												<br />
												<a href="#" class="admspoilerlink" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-txt="Просмотр ответов" data-txt2="Скрыть ответы">Просмотр ответов</a>
												<br />
												<div id="admspoiler-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
-ru" class="admspoiler poolan">
												    <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['info']['ru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
													    <div class="poolablock">
														    <span style="font-size: 10px; color: #888888; float: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['info']['cnt'][$_smarty_tpl->tpl_vars['k']->value];?>
 чел. / <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%</span><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>

														    <div class="pabg" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['color'][$_smarty_tpl->tpl_vars['k']->value];?>
; width: <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%;"></div>
														</div>
													<?php } ?>
												</div>
											</td>
											<td>
											    <span style="font-size: 12px; color: #888888; float: right;">Проголосовало: <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['summ'];?>
</span>
												<?php echo $_smarty_tpl->tpl_vars['item']->value['title_en'];?>

												<br />
												<br />
												<div id="admspoiler-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
-en" class="admspoiler poolan">
												    <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['info']['en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
													    <div class="poolablock">
														    <span style="font-size: 10px; color: #888888; float: right;"><?php echo $_smarty_tpl->tpl_vars['item']->value['info']['cnt'][$_smarty_tpl->tpl_vars['k']->value];?>
 чел. / <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%</span><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>

														    <div class="pabg" style="background: <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['color'][$_smarty_tpl->tpl_vars['k']->value];?>
; width: <?php echo $_smarty_tpl->tpl_vars['item']->value['info']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%;"></div>
														</div>
													<?php } ?>
												</div>
											</td>
                                            <td style="width: 180px;">
												<button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></button>
												<button type="button" class="btn btn-danger btn-xs deleteitem" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Удалить"><i class="fa fa-times"></i></button>
												<?php if ($_smarty_tpl->tpl_vars['item']->value['visible']==0){?>
												    <button type="button" class="btn btn-info btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Показать"><i class="fa fa-eye"></i></button>
												<?php }else{ ?>
												    <button type="button" class="btn btn-default btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Скрыть"><i class="fa fa-eye-slash"></i></button>
												<?php }?>
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
                             Не найдено ни одного опроса.
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