<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Слайдер <?=$slider['title'];?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN?>/slider">Слайдеры</a></li>
        <li class="active"><?=$slider['title']?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?= ADMIN; ?>/slider/edit" method="post" data-toggle="validator" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group has-feedback">
                        <label>Имя</label>
                        <input id="title" type="text" name="title" class="form-control" value="<?=$slider['title'];?>" placeholder="Введите имя" required>
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <input id="description" type="text" name="description" class="form-control" value="<?=$slider['description'];?>" placeholder="Введите описание">
                    </div>
                    <div class="form-group">
                        <label>Сортировка</label>
                        <input id="sort" type="text" name="sort" class="form-control" value="<?=$slider['sort'];?>" placeholder="Установите сортировку">
                    </div>
                    <div class="form-group">
                        <label>Картинка</label>
                        <input id="img" type="file" name="img" value="<?=$slider['img'];?>">
                        <img src="/img/slides/<?=$slider->img;?>" alt="" style="max-width: 150px;">
                    </div>
                    <button type="submit" class="btn btn-success">Сохранить</button>
                    <input type="hidden" name="id" value="<?= $slider->id; ?>">
                    <a href="<?=ADMIN;?>/slider/delete?id=<?=$slider['id'];?>" class="btn btn-danger delete">Удалить</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->