<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Добавить</h4>
            </div>
            <div class="modal-body">
			    <h4>Общие</h4>
                <div class="col-lg-12 form-group uploadposter">
                    <label>Изображение</label>
                	<br />
                    <img src="/documents/noimage.png" />
                	<form><input type="file" name="file" /></form>
                </div>
                <div class="col-lg-12 form-group uploadgoodphoto">
				    <button type="button" class="btn btn-success btn-xs addgoodphotolink"><i class="fa fa-photo"></i> Добавить фото</button>
                    <label>Фото товара</label>
                	<br />
                	<form><input type="file" name="file" /></form>
					<div class="col-lg-12 goodphotos"></div>
                </div>
				<form id="goods-form">
				<input id="goodphotos" type="hidden" name="photos" value="-" />
				<input id="poster" type="hidden" name="poster" />
                <div class="form-group">
                    <label>Цена</label>
                    <input class="form-control" type="text" name="price" />
                </div>
			    <h4>На русском языке</h4>
                    <input type="hidden" name="item" />
                    <div class="form-group">
                        <label>Название</label>
                        <input class="form-control" type="text" name="title_ru" />
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <textarea id="textarea-description" class="form-control" rows="3" name="description_ru"></textarea>
                    </div>
				    <h4>На англиском языке</h4>
                    <div class="form-group">
                        <label>Название</label>
                        <input class="form-control" type="text" name="title_en" />
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
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