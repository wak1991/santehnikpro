<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Cпециалист <?=$specialist['name'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/specialist">Список специалистов</a></li>
        <li class="active"><?=$specialist['name']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" value="<?=$specialist['name'];?>" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label>Специальность</label>
                        <input type="text" class="form-control" value="<?=$specialist['specialty'];?>" placeholder="Введите специальность">
                    </div>
                    <div class="form-group">
                        <label>Сортировка</label>
                        <input type="text" class="form-control" value="<?=$specialist['sort'];?>" placeholder="Установите сортировку">
                    </div>
                    <a href="<?=ADMIN;?>" class="btn btn-success">Сохранить</a>
                    <a href="<?=ADMIN;?>/specialist/delete?id=<?=$specialist['id'];?>" class="btn btn-danger delete">Удалить</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->