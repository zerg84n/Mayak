<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Добавить</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
				    <h4>Вопрос</h4>
                    <div class="form-group">
                        <label>На русском</label>
                        <input class="form-control poolq" type="text" name="title_ru" />
                    </div>
                    <div class="form-group">
                        <label>На английском</label>
                        <input class="form-control poolq" type="text" name="title_en" />
                    </div>
				</div>
                <div class="form-group">
                    <button id="addpoolanswer" type="button" class="btn btn-success btn-xs"><i class="fa fa-bar-chart-o"></i> Добавить ответ</button>
                	<label>Ответы</label>
                	<div id="pool_answers_add">
                        <div class="skispriceblock">
                            <button type="button" class="btn btn-danger btn-xs" onclick="delblock(this);"><i class="fa fa-times"></i></button>
							<div class="form-group">
                                <label>На русском</label>
                                <input class="form-control" type="text" name="answers_ru" />
                            </div>
                            <div class="form-group">
                                <label>На английском</label>
                                <input class="form-control" type="text" name="answers_en" />
                            </div>
                	    </div>
                	</div>
                </div>
            </div>
            <div class="modal-footer">
                <form id="pools-form">
                <input type="hidden" name="item" />
                <input type="hidden" name="action" value="item-create" />
			    <input type="hidden" name="title_ru" />
			    <input type="hidden" name="title_en" />
				<input id="pa_count" type="hidden" name="answers_count" />
                <div class="alert alert-success alert_success">Изменения применены!</div>
                <div class="alert alert-danger alert_error">Неверно заполнена форма!</div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary">Применить</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>