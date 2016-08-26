<?php /* Smarty version Smarty-3.1.6, created on 2016-02-15 12:00:22
         compiled from "../views/frontend/item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156925898856af985983cd76-60168660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c3e290d555d28018c59cd16c8eff4e6fc3b6f4' => 
    array (
      0 => '../views/frontend/item.tpl',
      1 => 1455519597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156925898856af985983cd76-60168660',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56af9859aa1c0',
  'variables' => 
  array (
    'lang' => 0,
    'good' => 0,
    'photodir' => 0,
    'photo' => 0,
    'templateWebPath' => 0,
    'key' => 0,
    'r' => 0,
    'similar' => 0,
    'cur_cat' => 0,
    'sim' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56af9859aa1c0')) {function content_56af9859aa1c0($_smarty_tpl) {?>    <div class="container topic">
        <h1><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['good']->value['title_ru'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['good']->value['title_en'];?>
<?php }?></h1>
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6 topic-pic">
                <div class="top-pic">
                    <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['photodir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['good']->value['poster'];?>
" alt="">
                </div>
                <div class="other-pic">
                    <div class="oth-pic-wrapper">
                        <span class="oth-pic active">
                            <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['photodir']->value;?>
/m/<?php echo $_smarty_tpl->tpl_vars['good']->value['poster'];?>
" alt="" data-original="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['photodir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['good']->value['poster'];?>
">
                        </span>
                    </div>
				    <?php  $_smarty_tpl->tpl_vars['photo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['photo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['good']->value['photos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->key => $_smarty_tpl->tpl_vars['photo']->value){
$_smarty_tpl->tpl_vars['photo']->_loop = true;
?>
                        <div class="oth-pic-wrapper">
                            <span class="oth-pic">
                                <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['photodir']->value;?>
/photos/m/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="" data-original="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['photodir']->value;?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
                            </span>
                        </div>
					<?php } ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-6 about-topic">
                <div>
				    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
					    <?php echo $_smarty_tpl->tpl_vars['good']->value['description_ru'];?>

					<?php }else{ ?>
                        <?php if ($_smarty_tpl->tpl_vars['good']->value['description_en']==''){?>
						    <div class="langnotify">
							    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
							</div>
							<?php echo $_smarty_tpl->tpl_vars['good']->value['description_ru'];?>

						<?php }else{ ?>
						    <?php echo $_smarty_tpl->tpl_vars['good']->value['description_en'];?>

						<?php }?>
					<?php }?>
				</div>
                <form id="addtocatform">
				    <input id="goodid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['good']->value['id'];?>
" />
				    <?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat1'){?>
                        <div class="topic-settings">
                            <div class="col-md-offset-2 col-md-4 col-xs-12 col-sm-7 set-left">
						        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                                    <div class="rostovka select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-rostid="0" data-cnt="1" data-rostovka="<?php echo $_smarty_tpl->tpl_vars['good']->value['rostovka'][0];?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['good']->value['width'][0];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'][0];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['rostovka'][0];?>
см</h5>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/sel3.png" alt="">
                                        </div>
                                        <div class="sel-option">
                                            <ul>
							    			    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['good']->value['rostovka']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
                                                    <li>
                                                        <h4 data-rostid="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-txt="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
см" data-rostovka="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['good']->value['width'][$_smarty_tpl->tpl_vars['key']->value];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'][$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
см</h4>
                                                    </li>
							    				<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
							    <?php }else{ ?>
                                    <div class="rostovka select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-cnt="1" data-rostovka="<?php echo $_smarty_tpl->tpl_vars['good']->value['rostovka'][0];?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['good']->value['width'][0];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'][0];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['rostovka'][0];?>
sm</h5>
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/sel3.png" alt="">
                                        </div>
                                        <div class="sel-option">
                                            <ul>
							    			    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['good']->value['rostovka']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['r']->key;
?>
                                                    <li>
                                                        <h4 data-txt="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
sm" data-rostovka="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
" data-width="<?php echo $_smarty_tpl->tpl_vars['good']->value['width'][$_smarty_tpl->tpl_vars['key']->value];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['width'][$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
sm</h4>
                                                    </li>
							    				<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
							    <?php }?>
                                <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Ростовка:<?php }else{ ?>Length:<?php }?></h2>
                            </div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
                                <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Ширина: <span id="goodwidth"><?php echo $_smarty_tpl->tpl_vars['good']->value['width'][0];?>
</span>см<?php }else{ ?>Width: <span id="goodwidth"><?php echo $_smarty_tpl->tpl_vars['good']->value['width'][0];?>
</span>sm<?php }?></h2>
                            </div>
						</div>
					<?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat2'){?>
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
							    <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Размер: <?php }else{ ?>Size: <?php }?><input style="padding: 5px;" id="gsize" type="text" /></h2>
								<input id="goodinfo" data-cnt="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
" type="hidden" />
                            </div>
						</div>
					<?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat3'){?>
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
						        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                                    <div class="select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-cnt="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['scale'];?>
</h5>
                                        </div>
                                    </div>
							    <?php }else{ ?>
                                    <div class="select sel-menu sel-item">
                                        <div class="sel-select">
                                            <h5 id="goodinfo" data-cnt="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['good']->value['scale'];?>
</h5>
                                        </div>
                                    </div>
							    <?php }?>
                                <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Размер:<?php }else{ ?>Scale:<?php }?></h2>
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
							    <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Объём(в кубах): <?php }else{ ?>Volume(cubes): <?php }?><input class="numberinput" id="cubevol" type="number" value="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
" /></h2>
                            </div>
						</div>
					<?php }?>
				    <?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat4'){?>
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
							    <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Площадь(квадраты): <?php }else{ ?>Area(squares): <?php }?><input class="numberinput" id="squarearea" type="number" value="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
" /></h2>
								<input id="goodinfo" data-cnt="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
" type="hidden" />
                            </div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat5'){?>
						<input id="goodinfo" data-cnt="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
" type="hidden" />
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat6'){?>
                        <div class="topic-settings">
                            <div class="col-md-offset-3 col-md-3 col-xs-12 col-sm-7 set-left">
							    <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Объём: <?php echo $_smarty_tpl->tpl_vars['good']->value['volume'];?>
л<?php }else{ ?>Volume: <?php echo $_smarty_tpl->tpl_vars['good']->value['volume'];?>
l<?php }?></h2>
							</div>
                            <div class="col-md-offset-1 col-md-5 col-sm-5 col-xs-12 set-right" style="margin-top: -5px;">
								<input id="goodinfo" data-cnt="1" data-price="<?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
" type="hidden" />
                            </div>
						</div>
					<?php }?>
                    <div class="topic-buy row">
                        <div class="col-md-7 col-xs-12">
                            <div class="topic-cost">
                                <h2 id="goodprice"><?php if ($_smarty_tpl->tpl_vars['good']->value['cat']=='goods_cat1'){?><?php echo $_smarty_tpl->tpl_vars['good']->value['price'][0];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['good']->value['price'];?>
<?php }?></h2>
                            </div>
                            <h4><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Кол<?php }else{ ?>Cnt<?php }?></h4>
                            <div class="amount">
                                <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><input id="gcnt" type="text" value="1 шт." data-txt="шт." disabled><?php }else{ ?><input id="gcnt" type="text" value="1 p." data-txt="p." disabled><?php }?>
                                <input id="cntup" type="button" class="up">
                                <input id="cntdown" type="button" class="down">
                            </div>
                        </div>
                        <div class="col-md-5 col-xs-12">
						    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><input id="added" style="display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="Добавлено!" class="topic-btn" disabled><?php }else{ ?><input id="added" style="display: none; opacity: 0.0; color: #00AA00; background: transparent; float: right; margin-top: -40px;" type="button" value="Added!" class="topic-btn" disabled><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><input id="addtocartbutton" type="submit" value="В корзину" class="topic-btn"><?php }else{ ?><input id="addtocartbutton" type="submit" value="Add to cart" class="topic-btn"><?php }?>
                        </div>
                    </div>
                </form>

                <hr class="hr-dashed">

                <div class="art-plug">
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,viber,whatsapp" data-size="s"></div>
                    
                        <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
                        <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
                    
                </div>
            </div>
        </div>
    </div>
    
    <hr class="hr-solid">
    
    <div class="container goods other">
        <h1><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Похожие товары<?php }else{ ?>Similar items<?php }?></h1>
        <div class="row">
		    <?php if (isset($_smarty_tpl->tpl_vars['similar']->value[0])){?>
		        <?php  $_smarty_tpl->tpl_vars['sim'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sim']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['similar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sim']->key => $_smarty_tpl->tpl_vars['sim']->value){
$_smarty_tpl->tpl_vars['sim']->_loop = true;
?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <div class="object goodssmallblock">
                            <a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['cur_cat']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['sim']->value['id'];?>
/"><h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['sim']->value['title_ru'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['sim']->value['title_en'];?>
<?php }?></h2></a>
                            <img src="/documents/goods/<?php echo $_smarty_tpl->tpl_vars['photodir']->value;?>
/m/<?php echo $_smarty_tpl->tpl_vars['sim']->value['poster'];?>
" alt="" onclick="document.location.href = '/catalogue/<?php echo $_smarty_tpl->tpl_vars['cur_cat']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['sim']->value['id'];?>
/';"/>
                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><p><?php echo $_smarty_tpl->tpl_vars['sim']->value['small_description_ru'];?>
</p><?php }else{ ?><p><?php echo $_smarty_tpl->tpl_vars['sim']->value['small_description_en'];?>
</p><?php }?>
                            <div class="obj-cost">
                                <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>от <?php echo $_smarty_tpl->tpl_vars['sim']->value['price'];?>
 Р<?php }else{ ?>at <?php echo $_smarty_tpl->tpl_vars['sim']->value['price'];?>
 R<?php }?></h3>
                                <button type="button" class="btn btn-info" onclick="document.location.href = '/catalogue/<?php echo $_smarty_tpl->tpl_vars['cur_cat']->value;?>
/item/<?php echo $_smarty_tpl->tpl_vars['sim']->value['id'];?>
/';"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>КУПИТЬ<?php }else{ ?>BUY<?php }?></button>
                            </div>
                        </div>
                    </div>
			    <?php } ?>
			<?php }else{ ?>
			    <h1 style="font-size: 14px; color: #888888;"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Нет рекомендаций<?php }else{ ?>Recommendations not found<?php }?></h1>
			<?php }?>
        </div>
    </div>
    
    <hr class="hr-solid">
    
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