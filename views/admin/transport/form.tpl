<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Добавить</h4>
            </div>
            <div class="modal-body">
			    <h4>На русском языке</h4>
                <form id="transport-form">
                    <input type="hidden" name="item" />
                    <div class="form-group">
                        <label>Название на русском</label>
                        <input class="form-control" type="text" name="title_ru" />
                    </div>
                    <div class="form-group">
                        <label>Название на английском</label>
                        <input class="form-control" type="text" name="title_en" />
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