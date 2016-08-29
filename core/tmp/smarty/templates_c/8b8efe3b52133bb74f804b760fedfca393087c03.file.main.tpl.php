<?php /* Smarty version Smarty-3.1.6, created on 2015-09-24 16:09:47
         compiled from "../views/admin/rates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5160500245603b04ca0f7c2-81303107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b8efe3b52133bb74f804b760fedfca393087c03' => 
    array (
      0 => '../views/admin/rates/main.tpl',
      1 => 1443092983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5160500245603b04ca0f7c2-81303107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5603b04cb39f9',
  'variables' => 
  array (
    'title' => 0,
    'match' => 0,
    'rates' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5603b04cb39f9')) {function content_5603b04cb39f9($_smarty_tpl) {?>        <div id="page-wrapper">
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
                            <button type="button" class="btn btn-info btn-xs create_button" OnClick="history.go(-1);"><i class="fa fa-arrow-left"></i> Назад</button>
							   <i class="fa fa-th-list fa-fw"></i>
							   <?php echo $_smarty_tpl->tpl_vars['match']->value['startdate'];?>
 в <?php echo $_smarty_tpl->tpl_vars['match']->value['starttime'];?>
 <?php echo $_smarty_tpl->tpl_vars['match']->value['team1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['match']->value['team2'];?>
 <span style="font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['match']->value['score'];?>
</span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php if (isset($_smarty_tpl->tpl_vars['rates']->value[0])){?>
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
                                            <th>Пользователь</th>
                                            <th>Ставка</th>
											     <th style="text-align: center;">Счёт</th>
                                            <th>Итог</th>
                                        </tr>
                                    </thead>
									    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tbody>
										     <tr id="adminrow-<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                            <td>
											         <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['user']['identity'];?>
" target="_blank"><?php if ($_smarty_tpl->tpl_vars['item']->value['user']['social']=='vkontakte'){?><i class="fa fa-vk"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['user']['social']=='facebook'){?><i class="fa fa-facebook"></i><?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['user']['social']=='instagram'){?><i class="fa fa-instagram"></i><?php }?></a>
													  <a href="#" class="admspoilerlink" data-item="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
											     <td><?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
 руб.</td>
                                            <td style="text-align: center; font-weight: bold;"><img class="smallteamicon" src="/images/<?php echo $_smarty_tpl->tpl_vars['match']->value['team1_poster'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
 <img class="smallteamicon" src="/images/<?php echo $_smarty_tpl->tpl_vars['match']->value['team2_poster'];?>
" /></td>
                                            <td style="text-align: center;"><?php if ($_smarty_tpl->tpl_vars['item']->value['end']==0){?>-<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['end']==1){?>Выиграл (<?php echo $_smarty_tpl->tpl_vars['item']->value['win'];?>
)<?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['end']==2){?>Проиграл<?php }?></td>
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
                             Не найдено ни одной ставки.
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