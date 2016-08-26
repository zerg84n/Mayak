<?php /* Smarty version Smarty-3.1.6, created on 2016-01-26 16:25:10
         compiled from "../views/frontend\articlesitem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2745556393d109ef692-43371583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cddfd672737d93513db9c9055be910914bbeacd' => 
    array (
      0 => '../views/frontend\\articlesitem.tpl',
      1 => 1453803883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2745556393d109ef692-43371583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56393d10c8b00',
  'variables' => 
  array (
    'lang' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56393d10c8b00')) {function content_56393d10c8b00($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
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
            <div class="col-md-9 article-right">
                <div class="article-right-block">
				    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
</h2>
                        <img src="/documents/articles/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt="">
                        <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['description_ru'];?>

					<?php }else{ ?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
</h2>
                        <img src="/documents/articles/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt="">
                        <?php if ($_smarty_tpl->tpl_vars['newsitem']->value['description_en']==''){?>
						    <div class="langnotify">
							    <i class="fa fa-warning"></i> This page don't have an English version. Russian version of text will be show.
							</div>
							<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['description_ru'];?>

						<?php }else{ ?>
						    <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['description_en'];?>

						<?php }?>
					<?php }?>
                </div>
                <div class="art-plug">
                    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="facebook,twitter,vkontakte,odnoklassniki" data-yashareTheme="counter"></div>
                    <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>