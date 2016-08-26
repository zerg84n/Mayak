<?php /* Smarty version Smarty-3.1.6, created on 2016-02-01 22:39:38
         compiled from "../views/frontend/pagenotfound.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94838757156af985aadda67-89655998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f49b8a397d0acbe4784cff415290f7196c88eb4' => 
    array (
      0 => '../views/frontend/pagenotfound.tpl',
      1 => 1454263325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94838757156af985aadda67-89655998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'ss_error_text_ru' => 0,
    'ss_error_text_en' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56af985ab3a25',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56af985ab3a25')) {function content_56af985ab3a25($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>Ошибка!<?php }else{ ?>Error!<?php }?>
        </h1>
    </div>
    
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
		    <?php echo $_smarty_tpl->tpl_vars['ss_error_text_ru']->value;?>

		<?php }else{ ?>
		    <?php echo $_smarty_tpl->tpl_vars['ss_error_text_en']->value;?>

		<?php }?>
    </div>
    
    <div class="bg slogan3">
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
</div><?php }} ?>