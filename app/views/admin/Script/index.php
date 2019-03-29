<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Скрипты
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Скрипты</li>
    </ol>
    <a href="<?=ADMIN;?>/script/add" class="btn btn-primary">Добавить</a>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Сортировка</th>
                                <th>Дейcтвие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($scripts as $script): ?>
                                <tr>
                                    <td><?=$script->name;?></td>
                                    <td><?=$script->sort;?></td>
                                    <td><a href="<?=ADMIN?>/script/edit?id=<?=$script->id;?>"><i class="fa fa-fw fa-edit"></i></a>
                                        <a href="<?=ADMIN;?>/script/delete?id=<?=$script->id;?>" class="delete"><i class="fa fa-fw fa-trash text-danger"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->