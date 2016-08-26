<?php /* Smarty version Smarty-3.1.6, created on 2015-11-20 02:43:41
         compiled from "../views/frontend\ajax_pool_result.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8606564e347d20f9f0-40765193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5db357f4e46d3e848c02ca30c63cccdac3b74f3b' => 
    array (
      0 => '../views/frontend\\ajax_pool_result.tpl',
      1 => 1447965799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8606564e347d20f9f0-40765193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'pool' => 0,
    'answer' => 0,
    'k' => 0,
    'poolscnt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564e347d47ef8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564e347d47ef8')) {function content_564e347d47ef8($_smarty_tpl) {?>                <?php if ($_smarty_tpl->tpl_vars['lang']->value=='ru'){?>
                    <div class="w-header">
                        <h1>Результаты опроса</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_ru'];?>
</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pool']->value['answers']['ru']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
% (<?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['cnt'][$_smarty_tpl->tpl_vars['k']->value];?>
)</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%; background: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['color'][$_smarty_tpl->tpl_vars['k']->value];?>
;"></div>
                                </div>
                            </li>
			    			<?php } ?>
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">Всего ответов: <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value;?>
</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">ВЕРНУТЬСЯ НАЗАД</button>
                    </div>
			    <?php }else{ ?>
                    <div class="w-header">
                        <h1>Pool result</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['pool']->value['title_en'];?>
</h2>
                    </div>
                    <div class="w-body">
                        <ul class="opros">
                            <?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pool']->value['answers']['en']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value){
$_smarty_tpl->tpl_vars['answer']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['answer']->key;
?>
			    			<li>
                                <div class="col col-sm-3 col-sm-offset-2">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['answer']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
% (<?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['cnt'][$_smarty_tpl->tpl_vars['k']->value];?>
)</h3>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="procent" style="width: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['percent'][$_smarty_tpl->tpl_vars['k']->value];?>
%; background: <?php echo $_smarty_tpl->tpl_vars['pool']->value['answers']['color'][$_smarty_tpl->tpl_vars['k']->value];?>
;"></div>
                                </div>
                            </li>
			    			<?php } ?>
                        </ul>
                        <h3 class="all-ask"><a href="#" class="underline" onclick="return false;">All answers: <?php echo $_smarty_tpl->tpl_vars['poolscnt']->value;?>
</a></h3>
                        <button class="back-btn" type="button" data-dismiss="modal" onclick="fillcurpool();closeline();">BACK</button>
                    </div>
			    <?php }?><?php }} ?>