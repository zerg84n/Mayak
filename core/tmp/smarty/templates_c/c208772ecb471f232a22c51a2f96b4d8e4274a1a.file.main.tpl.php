<?php /* Smarty version Smarty-3.1.6, created on 2015-10-22 02:32:17
         compiled from "../views/admin\users\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:313185627f58cdd2a60-96578897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c208772ecb471f232a22c51a2f96b4d8e4274a1a' => 
    array (
      0 => '../views/admin\\users\\main.tpl',
      1 => 1445459352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313185627f58cdd2a60-96578897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5627f58d32b0a',
  'variables' => 
  array (
    'title' => 0,
    'users' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627f58d32b0a')) {function content_5627f58d32b0a($_smarty_tpl) {?>        <div id="page-wrapper">
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
							   <i class="fa fa-th-list fa-fw"></i>
							   Пользователи
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['users']->value[0])){?>
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
                                            <th>Ф.И.О.</th>
											<th>Email</th>
                                            <th style="width: 180px;">Действия</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tbody>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['visible']==0){?>
										        <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="danger">
										    <?php }else{ ?>
										        <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
											<?php }?>
											     <td><?php echo $_smarty_tpl->tpl_vars['item']->value['surname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['lastname'];?>
</td>
												 <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                                                 <td style="width: 180px;">
													  <button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></button>
													  <button type="button" class="btn btn-danger btn-xs deleteitem" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Удалить"><i class="fa fa-times"></i></button>
													  <?php if ($_smarty_tpl->tpl_vars['item']->value['visible']==0){?>
													      <button type="button" class="btn btn-danger btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-ban"></i></button>
													  <?php }else{ ?>
													      <button type="button" class="btn btn-default btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><i class="fa fa-ban"></i></button>
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
                             Не найдено ни одного пользователя.
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