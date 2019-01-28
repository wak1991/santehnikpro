<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Константа <?=$constant['description'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/constant">Константы</a></li>
        <li class="active"><?=$constant['description']?></li>
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
                        <input type="text" name="description" class="form-control" value="<?=$constant['description'];?>" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label>Сортировка</label>
                        <input type="text" name="sort" class="form-control" value="<?=$constant['sort'];?>" placeholder="Установите сортировку">
                    </div>
                    <a href="<?=ADMIN;?>" class="btn btn-success">Сохранить</a>
                    <a href="<?=ADMIN;?>/specialist/delete?id=<?=$constant['id'];?>" class="btn btn-danger delete">Удалить</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content --><?php
/**
 * Created by PhpStorm.
 * User: WAK
 * Date: 28.01.2019
 * Time: 21:37
 */