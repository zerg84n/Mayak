<?php /* Smarty version Smarty-3.1.6, created on 2016-02-01 05:45:51
         compiled from "../views/frontend/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1644298294561115274d6eb0-23296233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25faeac9a7538a02108499a1ec0ffaf2b16f130c' => 
    array (
      0 => '../views/frontend/page.tpl',
      1 => 1454263325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1644298294561115274d6eb0-23296233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561115276bbcb',
  'variables' => 
  array (
    'lang' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561115276bbcb')) {function content_561115276bbcb($_smarty_tpl) {?>    <div class="bg">
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