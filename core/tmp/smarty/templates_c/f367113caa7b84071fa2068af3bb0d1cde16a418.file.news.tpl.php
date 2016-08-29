<?php /* Smarty version Smarty-3.1.6, created on 2016-01-26 16:23:53
         compiled from "../views/frontend\news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193165624d7fa2b25a5-21915571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f367113caa7b84071fa2068af3bb0d1cde16a418' => 
    array (
      0 => '../views/frontend\\news.tpl',
      1 => 1453803803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193165624d7fa2b25a5-21915571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d7fa470aa',
  'variables' => 
  array (
    'lang' => 0,
    'pools' => 0,
    'k' => 0,
    'answer' => 0,
    'news' => 0,
    'newsitem' => 0,
    'templateWebPath' => 0,
    'npp' => 0,
    'nppch' => 0,
    'np' => 0,
    'pages' => 0,
    'page' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d7fa470aa')) {function content_5624d7fa470aa($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Новости<?php }else{ ?>News<?php }?></h1>
    </div>
    
    <div class="container article">
        <div class="row">
            <div class="col-md-3 article-left">
			    <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0])){?>
				    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                        <div class="quality">
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
                                <div class="ask row">
                                    <div class="col-xs-12">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Результаты</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Другие опросы</a></h6>
                                    </div>
                                    <div class="col-xs-12">
                                        <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer'])){?><input type="button" class="ask-btn" disabled value="Отвечен" style="background: transparent !important;"/><?php }else{ ?><input type="submit" class="ask-btn" value="Ответить" data-item="Отвечен"/><?php }?>
                                    </div>
                                </div>
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['id'];?>
" />
                            </form>
                        </div>
					<?php }else{ ?>
                        <div class="quality">
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
                                <div class="ask row">
                                    <div class="col-xs-12">
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool1" onclick="return false;">Results</a></h6>
                                        <h6><a href="#" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Other pools</a></h6>
                                    </div>
                                    <div class="col-xs-12">
                                        <?php if (isset($_smarty_tpl->tpl_vars['pools']->value[0]['already']['answer'])){?><input type="button" class="ask-btn" disabled value="Already" style="background: transparent !important;"/><?php }else{ ?><input type="submit" class="ask-btn" value="Ok" data-item="Already"/><?php }?>
                                    </div>
                                </div>
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['id'];?>
" />
                            </form>
                        </div>
					<?php }?>
				<?php }?>
            </div>
            <div class="col-md-9 article-right news">
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
			        <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value){
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
                        <div class="article-right-block">
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/';"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
</h2>
                            <div class="date-news"> 
                                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/date-news.png" alt="">
                                <h6><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['whenadd_ru'];?>
</h6>
                            </div>
                            <a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><img src="/documents/news/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt=""></a>
                            <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['small_description_ru'];?>

				        	<br />
				        	<a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
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
                            <h2 style="cursor: pointer;" onclick="document.location.href = '/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/';"><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
</h2>
                            <div class="date-news"> 
                                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/date-news.png" alt="">
                                <h6><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['whenadd_en'];?>
</h6>
                            </div>
                            <a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
/"><img src="/documents/news/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
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
				        	<a href="/news/article/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['id'];?>
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
                                            <li><a href="/news/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/" class="active"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                                        <?php }else{ ?>
                                            <li><a href="/news/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
                                            <li><a href="/news/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
/" class="active"><?php echo $_smarty_tpl->tpl_vars['pages']->value['text2'][$_smarty_tpl->tpl_vars['key']->value];?>
</a></li>
                                        <?php }else{ ?>
                                            <li><a href="/news/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
        </div>
    </div><?php }} ?>