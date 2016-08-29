<?php /* Smarty version Smarty-3.1.6, created on 2015-07-26 17:55:34
         compiled from "../views/frontend/chat.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74899187155b4d8c628dba1-88540111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230d386fffc7c355753ad2a6498a1844646c3b27' => 
    array (
      0 => '../views/frontend/chat.tpl',
      1 => 1437914720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74899187155b4d8c628dba1-88540111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55b4d8c636112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b4d8c636112')) {function content_55b4d8c636112($_smarty_tpl) {?>        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Chat</h1>
					  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="serverblock panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" title="Counter-Strike 1.6"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/cs16.png" /></a>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26/32</div>
									    <div>de_dust2</div>
                                    <div><a href="steam://connect/192.168.0.1:27015">192.168.0.1:27015</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">CS 1.6 Server</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="serverblock panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" title="Counter-Strike 1.6"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/cs16.png" /></a>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26/32</div>
									    <div>de_dust2</div>
                                    <div><a href="steam://connect/192.168.0.1:27015">192.168.0.1:27015</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">CS 1.6 Server</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="serverblock panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" title="Counter-Strike 1.6"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/cs16.png" /></a>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26/32</div>
									    <div>de_dust2</div>
                                    <div><a href="steam://connect/192.168.0.1:27015">192.168.0.1:27015</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">CS 1.6 Server</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="serverblock panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <a href="#" title="Counter-Strike 1.6"><img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
images/cs16.png" /></a>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26/32</div>
									    <div>de_dust2</div>
                                    <div><a href="steam://connect/192.168.0.1:27015">192.168.0.1:27015</a></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">CS 1.6 Server</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                     <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Chat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat" id="log">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <?php if (0>1){?>
								    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
								    <?php }else{ ?>
									    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Auth or register for use chat" disabled />
									<?php }?>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper --><?php }} ?>