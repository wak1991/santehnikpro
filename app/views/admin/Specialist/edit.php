<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Специалист <?=$specialist['name'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/specialist">Специалисты</a></li>
        <li class="active"><?=$specialist['name']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/specialist/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label>Имя</label>
                            <input id="name" type="text" name="name" class="form-control" value="<?=$specialist['name'];?>" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label>Специальность</label>
                            <input id="specialty" type="text" name="specialty" class="form-control" value="<?=$specialist['specialty'];?>" placeholder="Введите специальность">
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" value="<?=$specialist['sort'];?>" placeholder="Установите сортировку">
                        </div>
                        <div class="gorm-group">
                            <div class="col-md-12">
                                <div class="box box-primary box-solid file-upload">
                                    <div class="box-header">
                                        <h3 class="box-title">Картинка</h3>
                                    </div>
                                    <div class="box-body">
                                        <div id="single" class="btn btn-success" data-url="specialist/add-image" data-name="single" data-folder="/img/our-specialist/">Выбрать фото</div>
                                        <p><small>Рекомендуемые размеры: 214x298 пикселей</small></p>
                                        <div class="single">
                                            <img src="/img/our-specialist/<?=$specialist->img;?>" alt="" style="max-height: 150px;">
                                        </div>
                                    </div>
                                    <div class="overlay">
                                        <i class="fa fa-refresh fa-spin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                        <input type="hidden" name="id" value="<?= $specialist->id; ?>">
                        <a href="<?=ADMIN;?>/specialist/delete?id=<?=$specialist['id'];?>" class="btn btn-danger delete">Удалить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->