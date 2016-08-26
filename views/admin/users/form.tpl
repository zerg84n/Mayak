<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Редактировать</h4>
            </div>
            <div class="modal-body">
                <form id="users-form">
                    <input type="hidden" name="item" />
                    <div class="form-group">
                        <label>Фамилия</label>
                        <input class="form-control" type="text" name="surname" />
                    </div>
                    <div class="form-group">
                        <label>Имя</label>
                        <input class="form-control" type="text" name="name" />
                    </div>
                    <div class="form-group">
                        <label>Отчество</label>
                        <input class="form-control" type="text" name="lastname" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" />
                    </div>
                    <div class="form-group">
                        <label>Пароль</label>
                        <input class="form-control" type="text" name="password" />
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