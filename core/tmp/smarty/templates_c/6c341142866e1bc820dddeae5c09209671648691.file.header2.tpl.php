<?php /* Smarty version Smarty-3.1.6, created on 2016-01-28 21:02:12
         compiled from "../views/frontend\header2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:226235638d7dce5dbe1-89868665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c341142866e1bc820dddeae5c09209671648691' => 
    array (
      0 => '../views/frontend\\header2.tpl',
      1 => 1453993330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226235638d7dce5dbe1-89868665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5638d7dd1bb50',
  'variables' => 
  array (
    'lang' => 0,
    'templateWebPath' => 0,
    'cartsumm' => 0,
    'ss_phone' => 0,
    'menu' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638d7dd1bb50')) {function content_5638d7dd1bb50($_smarty_tpl) {?>    <div class="container">
        <div class="header row">
		    <div class="changelang">
			    <a href="#" data-lang="en">ENG</a> | <a href="#" data-lang="ru">RUS</a>
				<input id="currentlang" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
			</div>
            <div class="header-left col-md-5 col-sm-4 col-xs-4">
                <ul class="row">
                    <!--<li class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                        <a href="#">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/inter.png">
                            <h3><?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Войти<?php }else{ ?>Login<?php }?></h3>
                        </a>
                    </li>-->
                    <li class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                        <a href="/cart/">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/basket.png">
                            <h3 id="cartlink"><span id="cartsumm"><?php echo $_smarty_tpl->tpl_vars['cartsumm']->value;?>
</span> <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Р<?php }else{ ?>R<?php }?></h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logo col-md-2 col-sm-4 col-xs-4">
                <a href="/"><img src="/documents/logo.png" alt="Главная страница"></a>
            </div>
            <div class="header-right col-md-4 col-sm-3 col-sm-offset-1 col-xs-offset-1 col-xs-3">
                <h3><?php echo $_smarty_tpl->tpl_vars['ss_phone']->value;?>
</h3>
                <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/telephone.png">
            </div>
        </div>
        <div class="navigation row">
            <div class="col-md-6 col-xs-12 nav-left">
			    <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-6 nav-left-1">
                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['link_ru'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['title_ru'];?>
</a></h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-5 col-xs-6">
				    	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[1]['link_ru'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[1]['title_ru'];?>
</a></h2>
                    </div>
				<?php }else{ ?>
                    <div class="col-lg-3 col-sm-6 col-md-4 col-xs-6 nav-left-1">
                        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['link_en'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[0]['title_en'];?>
</a></h2>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-5 col-xs-6">
				    	<h2><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[1]['link_en'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[1]['title_en'];?>
</a></h2>
                    </div>
				<?php }?>
            </div>
            <div class="col-lg-5 col-md-5 col-lg-offset-1 col-md-offset-1 col-xs-12 nav-right">
			    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (2) : 2-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
				        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
					        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['i']->value]['link_ru'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['i']->value]['title_ru'];?>
</a></h2>
					    <?php }else{ ?>
					        <h2><a href="<?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['i']->value]['link_en'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value[$_smarty_tpl->tpl_vars['i']->value]['title_en'];?>
</a></h2>
					    <?php }?>
                    </div>
				<?php }} ?>
            </div>
        </div>
	</div><?php }} ?>