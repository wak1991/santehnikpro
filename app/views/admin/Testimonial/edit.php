<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Отзыв <?=$testimonial['name'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/testimonial">Список отзывов</a></li>
        <li class="active"><?=$testimonial['name']?></li>
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
                        <input type="text" name="name" class="form-control" value="<?=$testimonial['name'];?>" placeholder="Введите имя">
                    </div>
                    <div class="form-group">
                        <label>Сортировка</label>
                        <input type="text" name="sort" class="form-control" value="<?=$testimonial['sort'];?>" placeholder="Установите сортировку">
                    </div>
                    <a href="<?=ADMIN;?>" class="btn btn-success">Сохранить</a>
                    <a href="<?=ADMIN;?>/testimonial/delete?id=<?=$testimonial['id'];?>" class="btn btn-danger delete">Удалить</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->