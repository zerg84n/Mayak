<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 18:04:56
         compiled from "../views/admin\settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283445624d40173ab11-75886244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fbf3abafaa74ac585c6dedb8538df0dc5ee7993' => 
    array (
      0 => '../views/admin\\settings.tpl',
      1 => 1454241894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283445624d40173ab11-75886244',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d401acaf3',
  'variables' => 
  array (
    'pricelists' => 0,
    'pl' => 0,
    'key' => 0,
    'ss_goods_cat1' => 0,
    'ss_goods_cat2' => 0,
    'ss_goods_cat3' => 0,
    'ss_goods_cat4' => 0,
    'ss_goods_cat5' => 0,
    'ss_goods_cat6' => 0,
    'settings' => 0,
    'item' => 0,
    'ss_default_lang' => 0,
    'ss_rules_expluatation' => 0,
    'ss_legal_title' => 0,
    'ss_legal_address' => 0,
    'ss_address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d401acaf3')) {function content_5624d401acaf3($_smarty_tpl) {?>        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Настройки</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-download fa-fw"></i>
							   Прайс-листы
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						    <form enctype="multipart/form-data" method="POST" action="/admin/ajax/">
							    <?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pricelists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value){
$_smarty_tpl->tpl_vars['pl']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['pl']->key;
?>
						        <div class="col-lg-3 form-group">
							        <label><?php echo $_smarty_tpl->tpl_vars['pl']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['pl']->value['status'];?>
</label>
									<input type="file" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" />
							    </div>
								<?php } ?>
								<input type="hidden" name="action" value="item-pricesupload" />
								<button type="submit" class="btn btn-default" style="display: block; clear: both; float: none; margin: 5px auto;">Применить</button>
							</form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-list-alt fa-fw"></i>
							   Настройки сайта
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="settings_checkboxes" class="col-lg-6 form-group">
                                <label>Видимые категории товаров</label>
								<br />
								<?php if ($_smarty_tpl->tpl_vars['ss_goods_cat1']->value==0){?><input type="checkbox" class="settings_checkbox" data-item="goods_cat1" /><?php }else{ ?><input type="checkbox" class="settings_checkbox" checked data-item="goods_cat1" /><?php }?> Лыжи и комплектующие
								<br />
								<?php if ($_smarty_tpl->tpl_vars['ss_goods_cat2']->value==0){?><input type="checkbox" class="settings_checkbox" data-item="goods_cat2" /><?php }else{ ?><input type="checkbox" class="settings_checkbox" checked data-item="goods_cat2" /><?php }?> Черновые мебельные заготовки (ЧМЗ)
								<br />
								<?php if ($_smarty_tpl->tpl_vars['ss_goods_cat3']->value==0){?><input type="checkbox" class="settings_checkbox" data-item="goods_cat3" /><?php }else{ ?><input type="checkbox" class="settings_checkbox" checked data-item="goods_cat3" /><?php }?> Трехслойная отделочная доска
								<br />
								<?php if ($_smarty_tpl->tpl_vars['ss_goods_cat4']->value==0){?><input type="checkbox" class="settings_checkbox" data-item="goods_cat4" /><?php }else{ ?><input type="checkbox" class="settings_checkbox" checked data-item="goods_cat4" /><?php }?> Клееный пол
								<br />
								<?php if ($_smarty_tpl->tpl_vars['ss_goods_cat5']->value==0){?><input type="checkbox" class="settings_checkbox" data-item="goods_cat5" /><?php }else{ ?><input type="checkbox" class="settings_checkbox" checked data-item="goods_cat5" /><?php }?> Мебель
								<br />
								<?php if ($_smarty_tpl->tpl_vars['ss_goods_cat6']->value==0){?><input type="checkbox" class="settings_checkbox" data-item="goods_cat6" /><?php }else{ ?><input type="checkbox" class="settings_checkbox" checked data-item="goods_cat6" /><?php }?> КФК клей
								<br />
                            </div>
							<div class="col-lg-6 form-group changesitelogo" style="height: 180px;">
							    <label>Логотип</label>
								<br />
							    <img src="/documents/logo.png" />
								<form><input type="file" name="file" /></form>
							</div>
							<form id="settings-update">
							<input id="input_goods_cat1" type="hidden" name="goods_cat1" value="<?php echo $_smarty_tpl->tpl_vars['ss_goods_cat1']->value;?>
" />
							<input id="input_goods_cat2" type="hidden" name="goods_cat2" value="<?php echo $_smarty_tpl->tpl_vars['ss_goods_cat2']->value;?>
" />
							<input id="input_goods_cat3" type="hidden" name="goods_cat3" value="<?php echo $_smarty_tpl->tpl_vars['ss_goods_cat3']->value;?>
" />
							<input id="input_goods_cat4" type="hidden" name="goods_cat4" value="<?php echo $_smarty_tpl->tpl_vars['ss_goods_cat4']->value;?>
" />
							<input id="input_goods_cat5" type="hidden" name="goods_cat5" value="<?php echo $_smarty_tpl->tpl_vars['ss_goods_cat5']->value;?>
" />
							<input id="input_goods_cat6" type="hidden" name="goods_cat6" value="<?php echo $_smarty_tpl->tpl_vars['ss_goods_cat6']->value;?>
" />
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='site'){?>
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['template']=='input'){?>
                                            <input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
                                        <?php }?>
										<?php if ($_smarty_tpl->tpl_vars['item']->value['template']=='textarea'){?>
										    <textarea class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</textarea>
										<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['template']=='select'){?>
                                            <select class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
">
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['option_alias']=='hide_non_active'){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='Нет'){?>
                                                        <option value="Да">Да</option>
                                                        <option selected value="Нет">Нет</option>
                                                    <?php }else{ ?>
                                                        <option selected value="Да">Да</option>
                                                        <option value="Нет">Нет</option>
                                                    <?php }?>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value['option_alias']=='advertisments'){?>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='Выключена'){?>
                                                        <option value="Включена">Включена</option>
                                                        <option selected value="Выключена">Выключена</option>
                                                    <?php }else{ ?>
                                                        <option selected value="Включена">Включена</option>
                                                        <option value="Выключена">Выключена</option>
                                                    <?php }?>
                                                <?php }?>
                                            </select>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
							<div class="form-group">
							    <label>Язык по умолчанию</label>
                                <select class="form-control" name="default_lang">
                                    <?php if ($_smarty_tpl->tpl_vars['ss_default_lang']->value=='ru'){?>
                                        <option selected value="ru">Русский</option>
                                        <option value="en">Английский</option>
                                    <?php }else{ ?>
                                        <option value="ru">Русский</option>
                                        <option selected value="en">Английский</option>
                                    <?php }?>
                                </select>
							</div>
                            <div class="form-group">
                                <label>Текст на странице ошибки 404 (RU)</label>
                                <textarea id="textarea-description" class="form-control" rows="3" name="error_text_ru"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Текст на странице ошибки 404 (EN)</label>
                                <textarea id="textarea-description3" class="form-control" rows="3" name="error_text_en"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Правила ухода за лыжами</label>
                                <textarea id="textarea-description2" class="form-control" rows="3" name="rules_expluatation"><?php echo $_smarty_tpl->tpl_vars['ss_rules_expluatation']->value;?>
</textarea>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-envelope-o fa-fw"></i> Юридическая информация
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='legal'){?>
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['template']=='input'){?>
                                            <input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                            <div class="form-group">
                                <label>Полное наименование</label>
                                <textarea class="form-control" rows="3" name="legal_title"><?php echo $_smarty_tpl->tpl_vars['ss_legal_title']->value;?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label>Юридический адрес</label>
                                <textarea class="form-control" rows="3" name="legal_address"><?php echo $_smarty_tpl->tpl_vars['ss_legal_address']->value;?>
</textarea>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-phone-square fa-fw"></i>
							   Контактная информация
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='contacts'){?>
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['template']=='input'){?>
                                            <input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                            <div class="form-group">
                                <label>Физический адрес</label>
                                <textarea class="form-control" rows="3" name="address"><?php echo $_smarty_tpl->tpl_vars['ss_address']->value;?>
</textarea>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-wrench fa-fw"></i>
							   Настройки административной панели
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['settings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='admin'){?>
                                    <div class="form-group">
                                        <label><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</label>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['template']=='input'){?>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['option_alias']=='admin_password'){?>
                                                <input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
" placeholder="******" />
                                            <?php }else{ ?>
                                                <input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['item']->value['option_alias'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
" />
                                            <?php }?>
                                        <?php }?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-6 -->
				<div class="col-lg-12" style="text-align: center; margin-bottom: 50px;">
                  <button type="submit" class="btn btn-default" style="margin-bottom: 15px;">Применить</button>
                  <div class="alert alert-success alert_success">Настройки применены!</div>
                  <div class="alert alert-danger alert_error">Неверно заполнена форма!</div>
              </div>
				</form>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper --><?php }} ?>