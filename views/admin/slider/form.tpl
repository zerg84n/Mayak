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
				<form id="slider-form">
				<input id="poster" type="hidden" name="poster" />
                <div class="form-group">
                    <label>ID товара</label>
                    <input class="form-control" type="text" name="good_id" />
                </div>
                <div class="form-group">
                    <label>Тип товара</label>
                    <select class="form-control" name="good_cat">
                        <option value="goods_cat1" selected>Лыжи и комплектующие</option>
                        <option value="goods_cat2">Черновые мебельные заготовки</option>
                        <option value="goods_cat3">Трехслойная отделочная доска</option>
                        <option value="goods_cat4">Клееный пол</option>
                        <option value="goods_cat5">Мебель</option>
						<option value="goods_cat6">КФК клей</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Цена</label>
                    <input class="form-control" type="text" name="price" />
                </div>
			    <h4>На русском языке</h4>
                    <input type="hidden" name="item" />
                    <div class="form-group">
                        <label>Заголовок</label>
                        <input class="form-control" type="text" name="title_ru" />
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