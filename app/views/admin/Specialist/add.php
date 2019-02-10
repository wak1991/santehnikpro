<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Новый специалист
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/specialist">Специалисты</a></li>
        <li class="active">Новый специалист</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/specialist/add" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label>Имя</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label>Специальность</label>
                            <input id="specialty" type="text" name="specialty" class="form-control" placeholder="Введите специальность">
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" placeholder="Установите сортировку">
                        </div>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->