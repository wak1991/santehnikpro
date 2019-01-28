<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Константы
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Константы</li>
    </ol>
    <a href="<?=ADMIN;?>/constant/add" class="btn btn-primary">Добавить</a>
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
                                <th>Описание</th>
                                <th>Сортировка</th>
                                <th>Дейcтвие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($constants as $constant): ?>
                                <tr>
                                    <td><?=$constant->name;?></td>
                                    <td><?=$constant->description;?></td>
                                    <td><?=$constant->sort;?></td>
                                    <td><a href="<?=ADMIN?>/constant/edit?id=<?=$constant->id;?>"><i class="fa fa-fw fa-edit"></i></a>
                                        <a href="<?=ADMIN;?>/constant/delete?id=<?=$constant->id;?>" class="delete"><i class="fa fa-fw fa-trash text-danger"></i></a></td>
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