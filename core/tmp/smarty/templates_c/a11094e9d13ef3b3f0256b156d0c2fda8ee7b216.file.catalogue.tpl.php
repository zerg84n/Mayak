<?php /* Smarty version Smarty-3.1.6, created on 2016-02-15 11:36:25
         compiled from "../views/frontend/catalogue.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115084435956ae4f15086169-04625378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a11094e9d13ef3b3f0256b156d0c2fda8ee7b216' => 
    array (
      0 => '../views/frontend/catalogue.tpl',
      1 => 1455518183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115084435956ae4f15086169-04625378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ae4f151ea12',
  'variables' => 
  array (
    'lang' => 0,
    'templateWebPath' => 0,
    'goods' => 0,
    'good' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
    'plink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae4f151ea12')) {function content_56ae4f151ea12($_smarty_tpl) {?></div>
    <div class="bg catalog-page">
        <div class="container menu">
            <div class="navbar">
                <div class="container catalog">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>КАТАЛОГ ТОВАРОВ<?php }else{ ?>CATALOGUE<?php }?></h2>
                    </div>
                    <div class="collapse navbar-collapse" id="responsive-menu">
                        <ul class="nav navbar-nav">
                            <li class="even">
                                <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Тип товара<?php }else{ ?>Item type<?php }?>:</h3>
                                <div class="select sel-menu indexcatselect">
                                    <div class="sel-select">
                                        <h5><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>все<?php }else{ ?>all<?php }?></h5>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/sel.png" alt="">
                                    </div>
                                    <div class="sel-option">
                                        <ul>
										    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                                                <li>
                                                    <h4 data-item="goods_cat1" data-txt="лыжи">Лыжи и комплектующие</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat2" data-txt="чмз">Черновые мебельные заготовки</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat3" data-txt="доска">Трехслойная отделочная доска</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat4" data-txt="клееный пол">Клееный пол</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat5" data-txt="мебель">Мебель</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat6" data-txt="клей">КФК клей</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="all" data-txt="все">Все</h4>
                                                </li>
											<?php }else{ ?>
                                                <li>
                                                    <h4 data-item="goods_cat1" data-txt="skis">Skis and accessories</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat2" data-txt="rfc">Rough furniture components</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat3" data-txt="board">Three-layer finishing board</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat4" data-txt="floor">Laminated floor</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat5" data-txt="furniture">Furniture</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="goods_cat6" data-txt="glue">Glue</h4>
                                                </li>
                                                <li>
                                                    <h4 data-item="all" data-txt="all">All</h4>
                                                </li>
											<?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container goods">
        <div class="row">
		    <?php if (isset($_smarty_tpl->tpl_vars['goods']->value[0])){?>
		    <?php  $_smarty_tpl->tpl_vars['good'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['good']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['good']->key => $_smarty_tpl->tpl_vars['good']->value){
$_smarty_tpl->tpl_vars['good']->_loop = true;
?>
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="object goodssmallblock" data-item="/catalogue/<?php echo $_smarty_tpl->tpl_vars['good']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
/">
                            <h2><?php echo $_smarty_tpl->tpl_vars['good']->value['title_ru'];?>
</h2>
                            <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['good']->value['good_cat'];?>
/m/<?php echo $_smarty_tpl->tpl_vars['good']->value['poster'];?>
" alt=""/>
                            <div class="lnspacer"></div>
							<p><?php echo $_smarty_tpl->tpl_vars['good']->value['small_description_ru'];?>
...</p>
                            <div class="obj-cost">
                                <h3><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
 Р</h3>
                                <button type="button" class="btn btn-info" onclick="document.location.href='/catalogue/<?php echo $_smarty_tpl->tpl_vars['good']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
/';return false;">КУПИТЬ</button>
                            </div>
                        </div>
                    </div>
				<?php }else{ ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="object goodssmallblock" data-item="/catalogue/<?php echo $_smarty_tpl->tpl_vars['good']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
/">
                            <h2><?php echo $_smarty_tpl->tpl_vars['good']->value['title_en'];?>
</h2>
                            <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['good']->value['good_cat'];?>
/m/<?php echo $_smarty_tpl->tpl_vars['good']->value['poster'];?>
" alt=""/>
                            <?php if ($_smarty_tpl->tpl_vars['good']->value['small_description_en']==''){?>
							    <p><?php echo $_smarty_tpl->tpl_vars['good']->value['small_description_ru'];?>
...</p>
						        <div class="langnotify">
						    	    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
						    	</div>
						    <?php }else{ ?>
							    <p><?php echo $_smarty_tpl->tpl_vars['good']->value['small_description_en'];?>
...</p>
								<div class="lnspacer"></div>
						    <?php }?>
                            <div class="obj-cost">
                                <h3><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
 R</h3>
                                <button type="button" class="btn btn-info" onclick="document.location.href='/catalogue/<?php echo $_smarty_tpl->tpl_vars['good']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
/';return false;">BUY</button>
                            </div>
                        </div>
                    </div>
				<?php }?>
			<?php } ?>
            <div class="pagginator">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                		    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value>=1&&$_smarty_tpl->tpl_vars['page']->value<=$_smarty_tpl->tpl_vars['pages']->value['pages'][8]){?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value==4){?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['plink']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                                    <?php }else{ ?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['plink']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                		    		<?php }?>
                                <?php }?>
                            <?php } ?>
                		<?php }else{ ?>
                		    <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['page']->value>=1&&$_smarty_tpl->tpl_vars['page']->value<=$_smarty_tpl->tpl_vars['pages']->value['pages'][8]){?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value==4){?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['plink']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/" class="active"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                                    <?php }else{ ?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['plink']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                		    		<?php }?>
                                <?php }?>
                            <?php } ?>
                		<?php }?>
                    </ul>
                </div>
            </div>
			<?php }else{ ?>
                <div class="langnotify" style="color: #AA0000; border-color: #AA0000; background-color: rgba(255,0,0,0.15);">
				    <i class="fa fa-warning"></i>
			        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
					    Не найдено ни одного товара в данной категории.
				    <?php }else{ ?>
					    No items found in this section.
				    <?php }?>
				</div>
			<?php }?>
        </div>
    </div>
    
    <div class="container price-list">
        <div class="row">
            <div class="col-md-offset-1 col-sm-4 col-md-3 col-sx-12">
                <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>СКАЧАТЬ ПРАЙС-ЛИСТ<?php }else{ ?>DOWNLOAD PRICE-LIST<?php }?>:</h2>
            </div>
            <div class="col-md-3 col-sm-4 col-sx-12 XLS">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/XLS.png" alt="">
                <a href="#" data-toggle="modal" data-target="#modal-7" OnClick="price_type('xls');"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>В формате<?php }else{ ?>In<?php }?> XLS</a>
            </div>
            <div class="col-md-3 col-sm-4 col-sx-12 ZIP">
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/ZIP.png" alt="">
                <a href="#" data-toggle="modal" data-target="#modal-7" OnClick="price_type('zip');"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>В формате<?php }else{ ?>In<?php }?> ZIP</a>
            </div>
        </div>
    </div>
	
    <div class="bg slogan2">
        <div class="container slogan-wrapper">
            <div class="slogan-left">
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <h1>Лыжи фабрики «Маяк»</h1>
                    <p>Идеальный выбор для охоты, рыбалки и путешествий</p>
				<?php }else{ ?>
                    <h1>Skis from «Mayak»</h1>
                    <p>The perfect choice for hunting, fishing and traveling</p>
				<?php }?>
            </div>
        </div>
    </div><?php }} ?>