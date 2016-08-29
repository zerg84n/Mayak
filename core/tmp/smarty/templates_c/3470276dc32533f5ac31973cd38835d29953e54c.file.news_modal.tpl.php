<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 23:12:20
         compiled from "../views/frontend/news_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192685546856ae4e840f9a55-56056430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3470276dc32533f5ac31973cd38835d29953e54c' => 
    array (
      0 => '../views/frontend/news_modal.tpl',
      1 => 1454263325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192685546856ae4e840f9a55-56056430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'pools' => 0,
    'answer' => 0,
    'k' => 0,
    'poolscnt' => 0,
    'pool' => 0,
    'k2' => 0,
    'answer2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ae4e842b84a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ae4e842b84a')) {function content_56ae4e842b84a($_smarty_tpl) {?>    <div class="modal fade whitebg" id="modal-pool1">
        <div class="container">
		    <div id="pools-add-results" class="modal-poolcontent">
                <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <div class="w-header">
                        <h1>Результаты опроса</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['title_ru'];?>
</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['ru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
% (<?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['cnt'][$_smarty_tpl->tpl_vars['k']->value];?>
)</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: <?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%; background: <?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['color'][$_smarty_tpl->tpl_vars['k']->value];?>
;"></div>
                                </div>
                            </li>
			    			<?php } ?>
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">Всего ответов: <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value[0];?>
</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">ВЕРНУТЬСЯ НАЗАД</button>
                    </div>
			    <?php }else{ ?>
                    <div class="w-header">
                        <h1>Pool result</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['title_en'];?>
</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
% (<?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['cnt'][$_smarty_tpl->tpl_vars['k']->value];?>
)</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: <?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%; background: <?php echo $_smarty_tpl->tpl_vars['pools']->value[0]['answers']['color'][$_smarty_tpl->tpl_vars['k']->value];?>
;"></div>
                                </div>
                            </li>
			    			<?php } ?>
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">All answers: <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value[0];?>
</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">BACK</button>
                    </div>
			    <?php }?>
			</div>
        </div>
    </div>
    
    <div class="modal fade whitebg" id="modal-pool2">
        <div class="container">
            <div class="modal-poolcontent">
                <div class="w-header">
                    <h1><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Другие опросы<?php }else{ ?>Other pools<?php }?></h1>
                </div>
                <div class="w-body">
                    <div class="other-ask">
					    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                            <?php  $_smarty_tpl->tpl_vars['pool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pool']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pool']->key => $_smarty_tpl->tpl_vars['pool']->value){
$_smarty_tpl->tpl_vars['pool']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pool']->key;
?>
								<h3 class="other-pools-hide"><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool3" onclick="pooladdhidcontent(this,<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
);return false;"><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_ru'];?>
</a></h3>
								<div class="pool-hidden-content">
                                    <div class="w-header">
                                        <h1>Опрос</h1>
                                        <h2><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_ru'];?>
</h2>
                                    </div>
                                    <div class="w-body row">
                                        <div class="col-lg-offset-4 col-sm-offset-3 col-xs-offset-1 col-md-7 col-md-offset-3 col-lg-5 col-sm-8 col-xs-10 variants">
                                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                    			<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pool']->value['answers']['ru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
                                                    <div class="rating">
                                                        <div class="rat-rad">
                                                            <?php if (isset($_smarty_tpl->tpl_vars['pool']->value['already']['answer'])){?>
                                                    		    <?php if ($_smarty_tpl->tpl_vars['k2']->value==$_smarty_tpl->tpl_vars['pool']->value['already']['answer']){?>
                                                    			    <input type="radio" checked disabled name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }else{ ?>
                                                    			    <input type="radio" name="rating" disabled value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }?>
                                                    			<label><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
                                                    		<?php }else{ ?>
                                                    		    <?php if ($_smarty_tpl->tpl_vars['k2']->value==0){?>
                                                    			    <input type="radio" name="rating" checked value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }else{ ?>
                                                    			    <input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }?>
                                                    			<label onclick="clickradiolabel(this);"><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
                                                    		<?php }?>
                                                        </div>
                                                    </div>
                                    			<?php } ?>
                                                <div class="col-xs-12">
                                                    <ul class="other-link">
                                                        <li><a href="#" class="underline" onclick="return false;">Всего ответов <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool1" onclick="pooladdhidresult(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
);return false;">Результаты</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Другие опросы</a></li>
                                                    </ul>
                                                </div>
												<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pool']->value['id'];?>
" />
                                                <div class="col-xs-10 col-sm-11 col-md-12">
                                                    <div class="link-btn">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['pool']->value['already']['answer'])){?><input type="button" class="answer" disabled value="ОТВЕЧЕН" style="background: transparent !important;"/><?php }else{ ?><input type="submit" class="answer" value="ОТВЕТИТЬ"/><?php }?>
                                                        <button class="back-btn back-btn-empty" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2">ВЕРНУТЬСЯ НАЗАД</button>
                                                    </div>
                                                </div>
											</form>
                                        </div>
                                    </div>
								</div>
								<div class="pool-hidden-results">
                                    <div class="w-header">
                                        <h1>Результаты опроса</h1>
                                        <h2><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_ru'];?>
</h2>
                                    </div>
                                    <div class="w-body">
                                        <ul class="opros">
                                            <?php  $_smarty_tpl->tpl_vars['answer2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pool']->value['answers']['ru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer2']->key => $_smarty_tpl->tpl_vars['answer2']->value){
$_smarty_tpl->tpl_vars['answer2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['answer2']->key;
?>
                                    		<li>
                                                <div class="col col-sm-3 col-sm-offset-2">
                                                    <h3><?php echo $_smarty_tpl->tpl_vars['answer2']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k2']->value];?>
% (<?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['cnt'][$_smarty_tpl->tpl_vars['k2']->value];?>
)</h3>
                                                </div>
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="procent" style="width: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k2']->value];?>
%; background: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['color'][$_smarty_tpl->tpl_vars['k2']->value];?>
;"></div>
                                                </div>
                                            </li>
                                    		<?php } ?>
                                        </ul>
                                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">Всего ответов: <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</a></h3>
                                        <button class="back-btn" type="button" onclick="fillcurpool();closeline();">ВЕРНУТЬСЯ НАЗАД</button>
                                    </div>
								</div>
					    	<?php } ?>
					    <?php }else{ ?>
                            <?php  $_smarty_tpl->tpl_vars['pool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pool']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pool']->key => $_smarty_tpl->tpl_vars['pool']->value){
$_smarty_tpl->tpl_vars['pool']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['pool']->key;
?>
								<h3 class="other-pools-hide"><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool3" onclick="pooladdhidcontent(this,<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
);return false;"><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_en'];?>
</a></h3>
								<div class="pool-hidden-content">
                                    <div class="w-header">
                                        <h1>Pool</h1>
                                        <h2><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_en'];?>
</h2>
                                    </div>
                                    <div class="w-body row">
                                        <div class="col-lg-offset-4 col-sm-offset-3 col-xs-offset-1 col-md-7 col-md-offset-3 col-lg-5 col-sm-8 col-xs-10 variants">
                                            <form action="/" onsubmit="event.preventDefault();addpool(this);return false;">
                                    			<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pool']->value['answers']['en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
                                                    <div class="rating">
                                                        <div class="rat-rad">
                                                            <?php if (isset($_smarty_tpl->tpl_vars['pool']->value['already']['answer'])){?>
                                                    		    <?php if ($_smarty_tpl->tpl_vars['k2']->value==$_smarty_tpl->tpl_vars['pool']->value['already']['answer']){?>
                                                    			    <input type="radio" checked disabled name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }else{ ?>
                                                    			    <input type="radio" name="rating" disabled value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }?>
                                                    			<label><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
                                                    		<?php }else{ ?>
                                                    		    <?php if ($_smarty_tpl->tpl_vars['k2']->value==0){?>
                                                    			    <input type="radio" name="rating" checked value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }else{ ?>
                                                    			    <input type="radio" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['k2']->value;?>
" onclick="clickradio(this);"/>
                                                    			<?php }?>
                                                    			<label onclick="clickradiolabel(this);"><h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
</h3></label>
                                                    		<?php }?>
                                                        </div>
                                                    </div>
                                    			<?php } ?>
                                                <div class="col-xs-12">
                                                    <ul class="other-link">
                                                        <li><a href="#" class="underline" onclick="return false;">All answers <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool1" onclick="pooladdhidresult(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
);return false;">Results</a></li>
                                                        <li><a href="#" class="underline" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2" onclick="return false;">Other pools</a></li>
                                                    </ul>
                                                </div>
												<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['pool']->value['id'];?>
" />
                                                <div class="col-xs-10 col-sm-11 col-md-12">
                                                    <div class="link-btn">
                                                        <?php if (isset($_smarty_tpl->tpl_vars['pool']->value['already']['answer'])){?><input type="button" class="answer" disabled value="ALREADY" style="background: transparent !important;"/><?php }else{ ?><input type="submit" class="answer" value="OK"/><?php }?>
                                                        <button class="back-btn back-btn-empty" type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-pool2">BACK</button>
                                                    </div>
                                                </div>
											</form>
                                        </div>
                                    </div>
								</div>
								<div class="pool-hidden-results">
                                    <div class="w-header">
                                        <h1>Pool results</h1>
                                        <h2><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_en'];?>
</h2>
                                    </div>
                                    <div class="w-body">
                                        <ul class="opros">
                                            <?php  $_smarty_tpl->tpl_vars['answer2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer2']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pool']->value['answers']['en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer2']->key => $_smarty_tpl->tpl_vars['answer2']->value){
$_smarty_tpl->tpl_vars['answer2']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['answer2']->key;
?>
                                    		<li>
                                                <div class="col col-sm-3 col-sm-offset-2">
                                                    <h3><?php echo $_smarty_tpl->tpl_vars['answer2']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k2']->value];?>
% (<?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['cnt'][$_smarty_tpl->tpl_vars['k2']->value];?>
)</h3>
                                                </div>
                                                <div class="col-md-7 col-sm-6">
                                                    <div class="procent" style="width: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k2']->value];?>
%; background: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['color'][$_smarty_tpl->tpl_vars['k2']->value];?>
;"></div>
                                                </div>
                                            </li>
                                    		<?php } ?>
                                        </ul>
                                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">All answers: <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</a></h3>
                                        <button class="back-btn" type="button" onclick="fillcurpool();closeline();">BACK</button>
                                    </div>
								</div>
					    	<?php } ?>
					    <?php }?>
                    </div>
                    <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();"><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>ВЕРНУТЬСЯ НАЗАД<?php }else{ ?>BACK<?php }?></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade whitebg" id="modal-pool3">
        <div class="container">
            <div id="pool-add-content" class="modal-poolcontent"></div>
        </div>
    </div><?php }} ?>