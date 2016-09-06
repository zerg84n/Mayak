<?php /* Smarty version Smarty-3.1.6, created on 2016-08-29 17:16:29
         compiled from "../views/frontend\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28426563626d4c37243-24751857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3be6350b246607e642f74a48172fd9ae6a402a' => 
    array (
      0 => '../views/frontend\\index.tpl',
      1 => 1472816090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28426563626d4c37243-24751857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563626d5ebbb3',
  'variables' => 
  array (
    'slider' => 0,
    'k' => 0,
    'slide' => 0,
    'lang' => 0,
    'templateWebPath' => 0,
    'goods' => 0,
    'good' => 0,
    'news' => 0,
    'newsitem' => 0,
    'articles' => 0,
    'article' => 0,
    'pools' => 0,
    'answer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563626d5ebbb3')) {function content_563626d5ebbb3($_smarty_tpl) {?>        <div id="carousel" class="container carousel slide">
            <ol class="carousel-indicators">
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
				    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
				        <li class="active" data-target="#carousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></li>
				    <?php }else{ ?>
                        <li data-target="#carousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></li>
				    <?php }?>
				<?php } ?>
            </ol>
			<div id="slbgs" style="display: none;">
			    <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
				    <input type="hidden" value="/documents/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value['poster'];?>
" />
				<?php } ?>
			</div>
            <div class="carousel-inner">
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
			    	    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?><div class="item active row" style="background-image: url('/documents/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value['poster'];?>
');"><?php }else{ ?><div class="item row" style="background-image: url('/documents/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value['poster'];?>
');"><?php }?>
                            <div class="col-lg-offset-6 col-md-offset-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="theme-item">
                                    <h2>лыжная фабрика «маяк»</h2>
                                </div>
                                <div class="item-name row">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 name-item">
                                        <h1><?php echo $_smarty_tpl->tpl_vars['slide']->value['title_ru'];?>
</h1>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 item-cost">
                                        <h1><?php echo $_smarty_tpl->tpl_vars['slide']->value['price'];?>
 Р</h1>
                                    </div>
                                </div>
                                <div class="about-item"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description_ru'];?>
</div>
                                <div class="item-buy row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a href="#">
                                            <!--data-toggle="modal" data-target="#modal-1" -->
											<button class="item-btn" onclick="document.location.href='/catalogue/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_id'];?>
/';return false;">КУПИТЬ</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 more-link"><!--<h3><a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_id'];?>
/">Подробнее</a></h3>--></div>
                                </div>
                            </div>
                        </div>
			    	<?php } ?>
			    <?php }else{ ?>
                    <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
			    	    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?><div class="item active row" style="background-image: url('/documents/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value['poster'];?>
');"><?php }else{ ?><div class="item row" style="background-image: url('/documents/slider/<?php echo $_smarty_tpl->tpl_vars['slide']->value['poster'];?>
');"><?php }?>
                            <div class="col-lg-offset-6 col-md-offset-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="theme-item">
                                    <h2>skis factory «mayak»</h2>
                                </div>
                                <div class="item-name row">
                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 name-item">
                                        <h1><?php echo $_smarty_tpl->tpl_vars['slide']->value['title_en'];?>
</h1>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 item-cost">
                                        <h1><?php echo $_smarty_tpl->tpl_vars['slide']->value['price'];?>
 R</h1>
                                    </div>
                                </div>
                                <div class="about-item"><?php echo $_smarty_tpl->tpl_vars['slide']->value['description_en'];?>
</div>
                                <div class="item-buy row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <a href="#">
                                            <button class="item-btn" onclick="document.location.href='/catalogue/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_id'];?>
/';return false;">BUY</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 more-link"><!--<h3><a href="/catalogue/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_cat'];?>
/item/<?php echo $_smarty_tpl->tpl_vars['slide']->value['good_id'];?>
/">Read more</a></h3>--></div>
                                </div>
                            </div>
                        </div>
			    	<?php } ?>
			    <?php }?>
            </div>
        </div>
    </div>
    
    <div class="bg">
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="/catalogue/" class="show-all-link"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Показывать все товары<?php }else{ ?>See all goods<?php }?></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
            </div>
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
    
    <div class="bg slogan">
        <div class="container slogan-wrapper">
            <div class="slogan-right">
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <h1>Лыжи фабрики «Маяк»</h1>
                    <p>Идеальный выбор для охоты, рыбалки и путешествий</p>
				<?php }else{ ?>
                    <h1>Skis from «Mayak»</h1>
                    <p>The perfect choice for hunting, fishing and traveling</p>
				<?php }?>
            </div>
        </div>
    </div>
    
    <div class="container news">
        <div class="block-theme">
            <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>НОВОСТИ<?php }else{ ?>NEWS<?php }?></h2>
        </div>
        <div class="news-block row">
		    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
		        <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value){
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
                    <div class="col-sm-4">
                        <h1><a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
</a></h1>
                        <a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><img src="/documents/news/m/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt=""></a>
                        <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_ru'];?>

                    </div>
			    <?php } ?>
			<?php }else{ ?>
		        <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value){
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
                    <div class="col-sm-4">
                        <h1><a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
</a></h1>
                        <a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><img src="/documents/news/m/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt=""></a>
                        <?php if ($_smarty_tpl->tpl_vars['newsitem']->value['small_description_en']==''){?>
						    <div class="langnotify">
							    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
							</div>
							<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_ru'];?>

						<?php }else{ ?>
						    <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_en'];?>

						<?php }?>
                    </div>
			    <?php } ?>
			<?php }?>
        </div>
        <div class="show-news">
            <a href="/news/"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Показать все новости<?php }else{ ?>See all news<?php }?></a>
        </div>
    </div>
    
    <div class="container news enc-block">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="block-theme">
                    <h2><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Энциклопедия<?php }else{ ?>Encyclopedia<?php }?></h2>
                </div>
                <div class="row">
				    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
					    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                            <div class="col-sm-6">
                                <h1><a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['article']->value['title_ru'];?>
</a></h1>
                                <a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
/"><img src="/documents/articles/m/<?php echo $_smarty_tpl->tpl_vars['article']->value['poster'];?>
" alt=""></a>
                            </div>
						<?php } ?>
					<?php }else{ ?>
					    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                            <div class="col-sm-6">
                                <h1><a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['article']->value['title_en'];?>
</a></h1>
                                <a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
/"><img src="/documents/articles/m/<?php echo $_smarty_tpl->tpl_vars['article']->value['poster'];?>
" alt=""></a>
                            </div>
						<?php } ?>
					<?php }?>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 quality">
                <div class="quality-wrapper">
			        <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0])){?>
				        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                            <h1><?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['title_ru'];?>
</h1>
                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['ru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
								    <div class="rating">
                                        <div class="rat-rad">
                                            <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer'])){?>
											    <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer']){?>
												    <input type="radio" checked disabled name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }else{ ?>
												    <input type="radio" name="rating" disabled value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }?>
												<label><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
											<?php }else{ ?>
											    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
												    <input type="radio" name="rating" checked value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }else{ ?>
												    <input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }?>
												<label onclick="clickradiolabel(this);"><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
											<?php }?>
                                        </div>
                                    </div>
								<?php } ?>
                                <div class="ask">
                                    <div class="col-xs-6">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Результаты</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Другие опросы</a></h6>
                                    </div>
                                    <div class="col-xs-6">
                                        <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer'])){?><input type="button" class="ask-btn" disabled value="Отвечен" style="background: transparent !important;"/><?php }else{ ?><input type="submit" class="ask-btn" value="Ответить" data-item="Отвечен"/><?php }?>
                                    </div>
                                </div>
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['id'];?>
" />
                            </form>
						<?php }else{ ?>
                            <h1><?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['title_en'];?>
</h1>
                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
								    <div class="rating">
                                        <div class="rat-rad">
                                            <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer'])){?>
											    <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer']){?>
												    <input type="radio" checked disabled name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }else{ ?>
												    <input type="radio" name="rating" disabled value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }?>
												<label><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
											<?php }else{ ?>
											    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
												    <input type="radio" name="rating" checked value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }else{ ?>
												    <input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }?>
												<label onclick="clickradiolabel(this);"><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
											<?php }?>
                                        </div>
                                    </div>
								<?php } ?>
                                <div class="ask">
                                    <div class="col-xs-6">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Results</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Other pools</a></h6>
                                    </div>
                                    <div class="col-xs-6">
                                        <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer'])){?><input type="button" class="ask-btn" disabled value="Already" style="background: transparent !important;"/><?php }else{ ?><input type="submit" class="ask-btn" value="Ok" data-item="Already"/><?php }?>
                                    </div>
                                </div>
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['id'];?>
" />
                            </form>
						<?php }?>
					<?php }?>
                </div>
            </div>
        </div>
    </div><?php }} ?>