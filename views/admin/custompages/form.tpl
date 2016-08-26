<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Добавить</h4>
            </div>
            <div class="modal-body">
                <form id="custompages-form">
				<h4>Общие</h4>
                <div class="form-group">
                    <label>Мета-теги (через запятую)</label>
                    <input class="form-control" type="text" name="metakeywords" />
                </div>
                <div class="form-group">
                    <label>Описание для поисковиков</label>
                    <textarea class="form-control" rows="3" name="metacontent"></textarea>
                </div>
			    <h4>На русском языке</h4>
                    <input type="hidden" name="item" />
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control" type="text" name="title_ru" />
                    </div>
                    <div class="form-group">
                        <label>Ссылка (необязательно)</label>
                        <input class="form-control" type="text" name="link_ru" />
                    </div>
                    <div class="form-group">
                        <label>Текст</label>
                        <textarea id="textarea-description" class="form-control" rows="3" name="description_ru"></textarea>
                    </div>
				    <h4>На англиском языке</h4>
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control" type="text" name="title_en" />
                    </div>
                    <div class="form-group">
                        <label>Ссылка (необязательно)</label>
                        <input class="form-control" type="text" name="link_en" />
                    </div>
                    <div class="form-group">
                        <label>Текст</label>
                        <textarea id="textarea-description2" class="form-control" rows="3" name="description_en"></textarea>
                    </div>
            </div>
            <input type="hidden" name="action" value="item-create" />
            <div class="modal-footer">
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