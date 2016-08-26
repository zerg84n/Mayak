<?php /* Smarty version Smarty-3.1.6, created on 2016-02-05 06:08:37
         compiled from "../views/frontend/newsitem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36775667556100839c7adc6-28159750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab67b98939189dadd9798497b30f6308775f20fb' => 
    array (
      0 => '../views/frontend/newsitem.tpl',
      1 => 1454263324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36775667556100839c7adc6-28159750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56100839cc640',
  'variables' => 
  array (
    'lang' => 0,
    'newsitem' => 0,
    'pools' => 0,
    'k' => 0,
    'answer' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56100839cc640')) {function content_56100839cc640($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
<?php }?>
        </h1>
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
												    <input type="radio" checked name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }else{ ?>
												    <input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }?>
											<?php }else{ ?>
											    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?><input type="radio" name="rating" checked value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/><?php }else{ ?><input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/><?php }?>
											<?php }?>
                                            <label onclick="clickradiolabel(this);"><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
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
												    <input type="radio" checked name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }else{ ?>
												    <input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/>
												<?php }?>
											<?php }else{ ?>
											    <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?><input type="radio" name="rating" checked value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/><?php }else{ ?><input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onclick="clickradio(this);"/><?php }?>
											<?php }?>
                                            <label onclick="clickradiolabel(this);"><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
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
                <div class="article-right-block">
				    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_ru'];?>
</h2>
                        <div class="date-news"> 
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/date-news.png" alt="">
                            <h6><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['whenadd_ru'];?>
</h6>
                        </div>
                        <img src="/documents/news/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
" alt="">
                        <?php echo $_smarty_tpl->tpl_vars['newsitem']->value['description_ru'];?>

					<?php }else{ ?>
                        <h2><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title_en'];?>
</h2>
                        <div class="date-news"> 
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/date-news.png" alt="">
                            <h6><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['whenadd_en'];?>
</h6>
                        </div>
                        <img src="/documents/news/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['poster'];?>
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