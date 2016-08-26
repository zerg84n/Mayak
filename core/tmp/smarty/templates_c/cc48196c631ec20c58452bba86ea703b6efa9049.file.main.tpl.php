<?php /* Smarty version Smarty-3.1.6, created on 2015-07-29 20:53:59
         compiled from "../views/admin/servers/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43141097555b5009cae8462-46905542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc48196c631ec20c58452bba86ea703b6efa9049' => 
    array (
      0 => '../views/admin/servers/main.tpl',
      1 => 1438185238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43141097555b5009cae8462-46905542',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55b5009cc4999',
  'variables' => 
  array (
    'title' => 0,
    'servers_last_update' => 0,
    'servers' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b5009cc4999')) {function content_55b5009cc4999($_smarty_tpl) {?>        <div id="page-wrapper">
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
                            <small class="text-muted" style="float: right;"><em>Последнее обновление: сегодня в <?php echo $_smarty_tpl->tpl_vars['servers_last_update']->value;?>
</em></small>
							   <i class="fa fa-th-list fa-fw"></i>
							   Серверы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['servers']->value[0])){?>
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
                                <table class="table adminservers">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-angle-double-up fa-fw"></i></th>
											     <th>Игра</th>
                                            <th>Название</th>
                                            <th>Адрес</th>
											     <th>Карта</th>
                                            <th>Игроки</th>
                                            <th>Владелец</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['mapimage']=='noresponse'){?>
                                            <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="danger">
                                        <?php }else{ ?>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['visible']==0){?>
                                                <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="warning">
                                            <?php }else{ ?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['vip']==1){?>
                                                    <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="success">
                                                <?php }else{ ?>
                                                    <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                                <?php }?>
                                            <?php }?>
                                        <?php }?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['rating'];?>
</td>
											     <td class="servertablegame"><img src="/documents/games/icons/<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
.gif"/></td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                                            <td><a href="steam://connect/<?php echo $_smarty_tpl->tpl_vars['item']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['port'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['port'];?>
</a></td>
											     <td class="servermaptd"><img class="minimap" src="/documents/games/maps/<?php echo $_smarty_tpl->tpl_vars['item']->value['mapimage'];?>
.jpg" /> <?php echo $_smarty_tpl->tpl_vars['item']->value['map'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['players'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['maxplayers'];?>
</td>
											     <td><a href="#">Bimmy</a></td>
                                            <td>
													  <button type="button" class="btn btn-primary btn-xs editbutton" data-toggle="modal" data-target="#form" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></button>
													  <?php if ($_smarty_tpl->tpl_vars['item']->value['visible']==0){?>
													      <button type="button" class="btn btn-info btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Показать"><i class="fa fa-eye"></i></button>
													  <?php }else{ ?>
													      <button type="button" class="btn btn-default btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Скрыть"><i class="fa fa-eye-slash"></i></button>
													  <?php }?>
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
                             Не найдено ни одного сервера
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