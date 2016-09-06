        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Порядок товаров</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <div class="servertable panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-exchange" aria-hidden="true"></i>
							   Порядок товаров
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul id="sortable">
                                {foreach from=$items item=item}  
                                <li id="{$item.id}"  class="ui-state-default col-lg-3" style="margin:10px 0; padding:0 15px;">
                                    <div class="object">
                                        <h2><a href="#">{$item.title_ru}</a></h2>
                                        <img src="/documents/goods/{$good_cat}/m/{$item.poster}" alt=""/>
                                    </div>
                                </li>
                               {/foreach}
                            </ul>
                        </div> 
                    </div>
                    <div class="col-lg-12" style="text-align: center; margin-bottom: 50px;">
                        <button type="submit" class="btn btn-default" onclick="save_order()" style="margin-bottom: 15px;">Применить</button>
                        <div class="alert alert-success alert_success">Настройки применены!</div>
                        <div class="alert alert-danger alert_error">Неверно заполнена форма!</div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->