<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список специалистов
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список специалистов</li>
    </ol>
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
                                <th>Специальность</th>
                                <th>Сортировка</th>
                                <th>Дейcтвие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($specialists as $specialist): ?>
                            <tr>
                                <td><?=$specialist->name;?></td>
                                <td><?=$specialist->specialty;?></td>
                                <td><?=$specialist->sort;?></td>
                                <td>
                                    <a href="<?=ADMIN?>/specialist/edit?id=<?=$specialist->id;?>"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="<?=ADMIN;?>/specialist/delete?id=<?=$specialist['id'];?>" class="delete"><i class="fa fa-fw fa-trash text-danger"></i></a></td>
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