<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Редактирование страниц "<?= $page->title; ?>"
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/page">Список страниц</a></li>
        <li class="active"><?= $page->title; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/page/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Название страницы</label>
                            <input type="text" value="<?= h($page->title); ?>" name="title" class="form-control" id="title" placeholder="Название страницы" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Родительская страница</label>
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/select.php',
                                'table' => 'pages',
                                'container' => 'select',
                                'cache' => 0,
                                'cacheKey' => 'admin_select',
                                'class' => 'form-control',
                                'attrs' => [
                                    'name' => 'parent_id',
                                    'id' => 'parent_id',
                                ],
                                'prepend' => '<option value="0">Самостоятельная страница</option>',
                            ])?>
                        </div>
                        <div class="form-group">
                            <label for="keywords">Ключевые слова</label>
                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?= h($page->keywords); ?>">
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <input type="text" name="description" value="<?= h($page->description); ?>" class="form-control" id="description" placeholder="Описание">
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" value="<?=$page['sort'];?>" placeholder="Установите сортировку">
                        </div>
                        <div class="form-group">
                            <label>Ссылка</label>
                            <input id="url" type="text" name="url" class="form-control" value="<?=$page['url'];?>" placeholder="Ссылка на другую страницу">
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?= $page->id; ?>">
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->