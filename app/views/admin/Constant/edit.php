<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Константа <?=$constant['name'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/constant">Константы</a></li>
        <li class="active"><?=$constant['name']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/constant/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label>Имя</label>
                            <input id="name" type="text" name="name" class="form-control" value="<?=$constant['name'];?>" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <input id="description" type="text" name="description" class="form-control" value="<?=$constant['description'];?>" placeholder="Введите описание">
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" value="<?=$constant['sort'];?>" placeholder="Установите сортировку">
                        </div>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                        <input type="hidden" name="id" value="<?= $constant->id; ?>">
                        <a href="<?=ADMIN;?>/constant/delete?id=<?=$constant['id'];?>" class="btn btn-danger delete">Удалить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->