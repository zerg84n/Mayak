<?php /* Smarty version Smarty-3.1.6, created on 2016-01-26 16:25:07
         compiled from "../views/frontend\articles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2334856393c965c19c5-66753809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1547429d1dea9b0bdbb6c95f355855f4030f5653' => 
    array (
      0 => '../views/frontend\\articles.tpl',
      1 => 1453803860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2334856393c965c19c5-66753809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56393c968f48e',
  'variables' => 
  array (
    'lang' => 0,
    'title_ru' => 0,
    'title_en' => 0,
    'news' => 0,
    'newsitem' => 0,
    'npp' => 0,
    'templateWebPath' => 0,
    'nppch' => 0,
    'np' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56393c968f48e')) {function content_56393c968f48e($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['title_ru']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['title_en']->value;?>
<?php }?>
        </h1>
    </div>
    
    <div class="container article">
        <div class="row">
		    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                <div class="col-md-3 col-xs-12 article-left alphabet-sort">
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="hunting">
                        <h2>Охота</h2>
                        <a href="#">Все</a>
                        <a href="#">А</a>
                        <a href="#">Б</a>
                        <a href="#">В</a>
                        <a href="#">Г</a>
                        <a href="#">Д</a>
                        <a href="#">Е</a>
                        <a href="#">Ж</a>
                        <a href="#">З</a>
                        <a href="#">И</a>
                        <a href="#">К</a>
                        <a href="#">Л</a>
                        <a href="#">М</a>
                        <a href="#">Н</a>
                        <a href="#">О</a>
                        <a href="#">П</a>
                        <a href="#">Р</a>
                        <a href="#">С</a>
                        <a href="#">Т</a>
                        <a href="#">У</a>
                        <a href="#">Ф</a>
                        <a href="#">Х</a>
                        <a href="#">Ч</a>
                        <a href="#">Ш</a>
                        <a href="#">Щ</a>
                        <a href="#">Ъ</a>
                        <a href="#">Ь</a>
                        <a href="#">Э</a>
                        <a href="#">Ю</a>
                        <a href="#">Я</a>
                    </div>
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="fishing">
                        <h2>Рыбалка</h2>
                        <a href="#">Все</a>
                        <a href="#">А</a>
                        <a href="#">Б</a>
                        <a href="#">В</a>
                        <a href="#">Г</a>
                        <a href="#">Д</a>
                        <a href="#">Е</a>
                        <a href="#">Ж</a>
                        <a href="#">З</a>
                        <a href="#">И</a>
                        <a href="#">К</a>
                        <a href="#">Л</a>
                        <a href="#">М</a>
                        <a href="#">Н</a>
                        <a href="#">О</a>
                        <a href="#">П</a>
                        <a href="#">Р</a>
                        <a href="#">С</a>
                        <a href="#">Т</a>
                        <a href="#">У</a>
                        <a href="#">Ф</a>
                        <a href="#">Х</a>
                        <a href="#">Ч</a>
                        <a href="#">Ш</a>
                        <a href="#">Щ</a>
                        <a href="#">Ъ</a>
                        <a href="#">Ь</a>
                        <a href="#">Э</a>
                        <a href="#">Ю</a>
                        <a href="#">Я</a>
                    </div>
                </div>
			<?php }else{ ?>
                <div class="col-md-3 col-xs-12 article-left alphabet-sort">
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="hunting">
                        <h2>Hunting</h2>
                        <a href="#">All</a>
                        <a href="#">A</a>
                        <a href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">M</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">V</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </div>
                    <div class="article-left-block row col-md-12 col-sm-6 col-xs-12" data-item="fishing">
                        <h2>Fishing</h2>
                        <a href="#">All</a>
                        <a href="#">A</a>
                        <a href="#">B</a>
                        <a href="#">C</a>
                        <a href="#">D</a>
                        <a href="#">E</a>
                        <a href="#">F</a>
                        <a href="#">G</a>
                        <a href="#">H</a>
                        <a href="#">I</a>
                        <a href="#">J</a>
                        <a href="#">K</a>
                        <a href="#">L</a>
                        <a href="#">M</a>
                        <a href="#">N</a>
                        <a href="#">O</a>
                        <a href="#">P</a>
                        <a href="#">Q</a>
                        <a href="#">R</a>
                        <a href="#">S</a>
                        <a href="#">T</a>
                        <a href="#">U</a>
                        <a href="#">V</a>
                        <a href="#">W</a>
                        <a href="#">X</a>
                        <a href="#">Y</a>
                        <a href="#">Z</a>
                    </div>
                </div>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['news']->value[0])){?>
            <div class="col-md-9 article-right">
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
			        <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value){
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/articles/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/';"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
</h2>
                            <a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><img src="/documents/articles/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt=""></a>
                            <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_ru'];?>

				        	<br />
				        	<a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/">Читать полностью</a>
                        </div>
				    <?php } ?>
				<?php }else{ ?>
			        <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value){
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/articles/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/';"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
</h2>
                            <a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><img src="/documents/articles/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt=""></a>
                            <?php if ($_smarty_tpl->tpl_vars['newsitem']->value['small_description_en']==''){?>
							    <div class="langnotify">
								    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
								</div>
								<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_ru'];?>

							<?php }else{ ?>
							    <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_en'];?>

							<?php }?>
				        	<br />
				        	<a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/">Read full</a>
                        </div>
				    <?php } ?>
				<?php }?>
                <div class="article-pagginator">
                    <div class="col-md-6 col-sm-6 col-xs-12 art-show">
                        <h4><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Показывать по<?php }else{ ?>Per page<?php }?></h4>
                        <div class="select sel-menu sel-pag npp-app-select">
                            <div class="sel-select">
                                <h5><?php echo $_smarty_tpl->tpl_vars['npp']->value;?>
</h5>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/sel2.png" alt="">
                            </div>
                            <div class="sel-option">
                                <ul>
								    <?php  $_smarty_tpl->tpl_vars['np'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['np']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nppch']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['np']->key => $_smarty_tpl->tpl_vars['np']->value){
$_smarty_tpl->tpl_vars['np']->_loop = true;
?><li><h4><?php echo $_smarty_tpl->tpl_vars['np']->value;?>
</h4></li><?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 art-pagg">
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
                                            <li><a href="/articles/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/" class="active"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                                        <?php }else{ ?>
                                            <li><a href="/articles/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
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
                                            <li><a href="/articles/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/" class="active"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                                        <?php }else{ ?>
                                            <li><a href="/articles/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
							    		<?php }?>
                                    <?php }?>
                                <?php } ?>
							<?php }?>
                        </ul>
                    </div>
                </div>
            </div>
			<?php }else{ ?>
            <div class="col-md-9 article-right">
                <div class="article-right-block">
				    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                        <h2>Статьи не найдены</h2>
                        <div class="art-not-found">
                            <h1>Статьи по запрашиваемым тегам не найдены</h1>
                        </div>
					<?php }else{ ?>
                        <h2>Articles not found</h2>
                        <div class="art-not-found">
                            <h1>Articles with such parameters were not found</h1>
                        </div>
					<?php }?>
                </div>
            </div>
			<?php }?>
        </div>
    </div><?php }} ?>