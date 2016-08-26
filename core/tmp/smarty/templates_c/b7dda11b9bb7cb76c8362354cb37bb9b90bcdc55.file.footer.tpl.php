<?php /* Smarty version Smarty-3.1.6, created on 2016-01-31 17:53:26
         compiled from "../views/frontend\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65535624d3de8dd5c0-66031231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7dda11b9bb7cb76c8362354cb37bb9b90bcdc55' => 
    array (
      0 => '../views/frontend\\footer.tpl',
      1 => 1454241197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65535624d3de8dd5c0-66031231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d3dea78b9',
  'variables' => 
  array (
    'lang' => 0,
    'ss_phone' => 0,
    'ss_phone2' => 0,
    'ss_fax' => 0,
    'ss_email' => 0,
    'ss_address' => 0,
    'menu' => 0,
    'menuitem' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d3dea78b9')) {function content_5624d3dea78b9($_smarty_tpl) {?>   <div class="footer">
       <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
            <div class="container">
                <div class="col-sm-6 col-md-3">
                    <h1>Контакты</h1>
                    <div class="footer-info">
                        <h2>Телефон: <?php echo $_smarty_tpl->tpl_vars['ss_phone']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ss_phone2']->value;?>
</h2>
                        <h2>Факс:  <?php echo $_smarty_tpl->tpl_vars['ss_fax']->value;?>
</h2>
                        <h2>Почта: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['ss_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ss_email']->value;?>
</a></h2>
                    </div>
                    <div class="footer-info">
                        <h2>Адрес: <?php echo $_smarty_tpl->tpl_vars['ss_address']->value;?>
</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>Информация</h1>
                    <ul>
		    		    <?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value){
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
?>
                            <li>
		    			    	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['link_ru'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['title_ru'];?>
</a></h2>
                            </li>
		    			<?php } ?>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>Мы принимаем</h1>
                    <div class="footer-info">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/icon-1.png" alt="">
                    </div>
                    <div class="share">
                        <div id="ok_shareWidget"></div>
                        <div id="vk_like"></div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 footer-share">
                    <div id="vk_groups"></div>
                </div>
            </div>
		<?php }else{ ?>
            <div class="container">
                <div class="col-sm-6 col-md-3">
                    <h1>Contacts</h1>
                    <div class="footer-info">
                        <h2>Phone: <?php echo $_smarty_tpl->tpl_vars['ss_phone']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['ss_phone2']->value;?>
</h2>
                        <h2>Fax:  <?php echo $_smarty_tpl->tpl_vars['ss_fax']->value;?>
</h2>
                        <h2>Email: <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['ss_email']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ss_email']->value;?>
</a></h2>
                    </div>
                    <div class="footer-info">
                        <h2>Address: <?php echo $_smarty_tpl->tpl_vars['ss_address']->value;?>
</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>Information</h1>
                    <ul>
		    		    <?php  $_smarty_tpl->tpl_vars['menuitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->key => $_smarty_tpl->tpl_vars['menuitem']->value){
$_smarty_tpl->tpl_vars['menuitem']->_loop = true;
?>
                            <li>
		    			    	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['link_en'];?>
"><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['title_en'];?>
</a></h2>
                            </li>
		    			<?php } ?>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h1>We get</h1>
                    <div class="footer-info">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/icon-1.png" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 footer-share">
                    <div id="vk_groups"></div>
                </div>
            </div>
		<?php }?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/bootstrap.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
js/script.js"></script>
  </body>
</html><?php }} ?>