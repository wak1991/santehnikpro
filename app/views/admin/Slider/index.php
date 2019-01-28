<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Слайдеры
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Слайдеры</li>
    </ol>
    <a href="<?=ADMIN;?>/slider/add" class="btn btn-primary">Добавить</a>
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
                            <?php foreach ($sliders as $slider): ?>
                                <tr>
                                    <td><?=$slider->title;?></td>
                                    <td><?=$slider->sort;?></td>
                                    <td><a href="<?=ADMIN?>/slider/edit?id=<?=$slider->id;?>"><i class="fa fa-fw fa-edit"></i></a>
                                    <a href="<?=ADMIN;?>/slider/delete?id=<?=$slider->id;?>" class="delete"><i class="fa fa-fw fa-trash text-danger"></i></a></td>
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