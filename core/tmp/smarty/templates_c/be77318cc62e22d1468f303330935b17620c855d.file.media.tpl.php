<?php /* Smarty version Smarty-3.1.6, created on 2015-10-19 17:56:17
         compiled from "../views/frontend\media.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139095624d91550a821-82090736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be77318cc62e22d1468f303330935b17620c855d' => 
    array (
      0 => '../views/frontend\\media.tpl',
      1 => 1445255775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139095624d91550a821-82090736',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5624d9157101b',
  'variables' => 
  array (
    'youtube' => 0,
    'ss_youtube_trailer' => 0,
    'slider' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5624d9157101b')) {function content_5624d9157101b($_smarty_tpl) {?>    <div class="panel panel-primary">
        <div class="panel-heading">Скриншоты и видео</div>
        <div class="panel-body">
            <div class="galleria">
                <?php if ($_smarty_tpl->tpl_vars['youtube']->value!='#'){?><a href="http://www.youtube.com/watch?v=<?php echo $_smarty_tpl->tpl_vars['ss_youtube_trailer']->value;?>
"><img src="http://img.youtube.com/vi/<?php echo $_smarty_tpl->tpl_vars['ss_youtube_trailer']->value;?>
/hqdefault.jpg"></a><?php }?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
" />
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Комментарии</div>
        <div id="vk_comments_wrapper" class="panel-body"><div id="vk_comments"></div></div>
    </div><?php }} ?>