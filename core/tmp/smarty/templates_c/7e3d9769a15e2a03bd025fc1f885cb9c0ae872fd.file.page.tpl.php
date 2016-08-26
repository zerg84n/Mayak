<?php /* Smarty version Smarty-3.1.6, created on 2015-11-15 18:55:28
         compiled from "../views/frontend\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82205624d5c79046a6-63422622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e3d9769a15e2a03bd025fc1f885cb9c0ae872fd' => 
    array (
      0 => '../views/frontend\\page.tpl',
      1 => 1447592126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82205624d5c79046a6-63422622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d5c79c4ed',
  'variables' => 
  array (
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d5c79c4ed')) {function content_5624d5c79c4ed($_smarty_tpl) {?>    <div class="bg">
        <h1 class="container theme-tab">
            <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['item']->value['title_ru'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['title_en'];?>
<?php }?>
        </h1>
    </div>
    
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?><?php echo $_smarty_tpl->tpl_vars['item']->value['description_ru'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['description_en'];?>
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