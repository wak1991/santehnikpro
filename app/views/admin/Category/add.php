<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новая категория
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/category">Список категорий</a></li>
        <li class="active">Новая категория</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/category/add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Название категории</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Название категории" required>
                            <!-- <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Родительская категория</label>
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/select.php',
                                'table' => 'category',
                                'container' => 'select',
                                'cache' => 0,
                                'cacheKey' => 'admin_select',
                                'class' => 'form-control',
                                'attrs' => [
                                    'name' => 'parent_id',
                                    'id' => 'parent_id',
                                ],
                                'prepend' => '<option value="0">Самостоятельная категория</option>',
                            ])?>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Ключевые слова</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание">
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" placeholder="Установите сортировку">
                        </div>
                        <div class="form-group">
                            <textarea id="content_editor" name="text"></textarea>
                        </div>
                        <div class="gorm-group">
                            <div class="col-md-12">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинка</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="category/add-image" data-name="single" data-folder="/img/category/">Выбрать фото</div>
                                        <p><small>Рекомендуемые размеры: 270x169 пикселей</small></p>
                                        <div class="single"></div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->