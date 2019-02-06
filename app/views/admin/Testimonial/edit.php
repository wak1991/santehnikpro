<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Отзыв <?=$testimonial['name'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/testimonial">Отзывы</a></li>
        <li class="active"><?=$testimonial['name']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/testimonial/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label>Имя</label>
                            <input id="name" type="text" name="name" class="form-control" value="<?=$testimonial['name'];?>" placeholder="Введите имя" required>
                        </div>
                        <div class="form-group">
                            <label>Текст озыва</label>
                            <input id="description" type="text" name="description" class="form-control" value="<?=$testimonial['description'];?>" placeholder="Введите текст">
                        </div>
                        <div class="form-group">
                            <label>Сортировка</label>
                            <input id="sort" type="text" name="sort" class="form-control" value="<?=$testimonial['sort'];?>" placeholder="Установите сортировку">
                        </div>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                        <input type="hidden" name="id" value="<?= $testimonial->id; ?>">
                        <a href="<?=ADMIN;?>/testimonial/delete?id=<?=$testimonial['id'];?>" class="btn btn-danger delete">Удалить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->