<?php /* Smarty version Smarty-3.1.6, created on 2015-07-28 00:00:12
         compiled from "../views/admin/pages/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51677496155b667b3398a59-06987024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '315a074f4f0181c3c67563c44c76b1052b107fe1' => 
    array (
      0 => '../views/admin/pages/main.tpl',
      1 => 1438023610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51677496155b667b3398a59-06987024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55b667b34a878',
  'variables' => 
  array (
    'title' => 0,
    'cpages' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
    'small_description' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b667b34a878')) {function content_55b667b34a878($_smarty_tpl) {?>        <div id="page-wrapper">
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
							   Текстовые страницы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['cpages']->value[0])){?>
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
                                            <th>Название</th>
                                            <th>Ссылка</th>
                                            <th>Краткое содержание</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tbody>
                                        <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
											     <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
</a></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['small_description']->value;?>
</td>
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
                             Не найдено ни одной страницы
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