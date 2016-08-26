<?php /* Smarty version Smarty-3.1.6, created on 2015-09-24 16:07:25
         compiled from "../views/admin/payments/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5160328795603d54855c137-65873227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '832a86942cf151c430949c13ad79a65c1ad5bf54' => 
    array (
      0 => '../views/admin/payments/main.tpl',
      1 => 1443092843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5160328795603d54855c137-65873227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5603d5486ab56',
  'variables' => 
  array (
    'title' => 0,
    'payments' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603d5486ab56')) {function content_5603d5486ab56($_smarty_tpl) {?>        <div id="page-wrapper">
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
							   Заказы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['payments']->value[0])){?>
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
                                            <th>Дата</th>
                                            <th style="text-align: center;">Пользователь</th>
											     <th style="text-align: center;">Сумма</th>
                                            <th>Действия</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>
										        <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="warning">
										    <?php }else{ ?>
										        <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
											<?php }?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['date'];?>
</td>
                                            <td>
											         <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['identity'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['item']->value['user']['social']=='vkontakte'){?><i class="fa fa-vk"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['user']['social']=='facebook'){?><i class="fa fa-facebook"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['user']['social']=='instagram'){?><i class="fa fa-instagram"></i><?php }?></a>
													  <a class="admspoilerlink" href="#" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['name'];?>
</a>
													  <div class="admspoiler" id="admspoiler-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="color: #555555; font-size: 10px;">
													  <br /><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['payment'];?>

													  <br /><?php echo $_smarty_tpl->tpl_vars['item']->value['user']['fio'];?>

													  <br />На счету: <?php echo $_smarty_tpl->tpl_vars['item']->value['user']['money'];?>
 руб.
													  </div>
											     </td>
                                            <td style="text-align: left;"><?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
 руб.</td>
                                            <td>
													  <?php if ($_smarty_tpl->tpl_vars['item']->value['status']==0){?>
													      <button type="button" class="btn btn-success btn-xs showhide" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" title="Показать"><i class="fa fa-check"></i></button>
													  <?php }else{ ?>
													      <button type="button" class="btn btn-default btn-xs" disabled><i class="fa fa-check"></i></button>
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
                             Не найдено ни одного матча.
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