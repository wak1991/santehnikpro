<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Скрипт <?=$script['name'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/script">Скрипты</a></li>
        <li class="active"><?=$script['name']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/script/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label>Имя</label>
                            <input id="name" type="text" name="name" class="form-control" value="<?=$script['name'];?>" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" value="<?=$script['sort'];?>" placeholder="Установите сортировку">
                        </div>
                        <div class="form-group">
                            <textarea id="value" name="value"><?=$script['value'];?></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                        <input type="hidden" name="id" value="<?= $script->id; ?>">
                        <a href="<?=ADMIN;?>/script/delete?id=<?=$script['id'];?>" class="btn btn-danger delete">Удалить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->