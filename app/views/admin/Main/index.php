<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Панель управления
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?=$sliders_count;?></h3>

                    <p>Слайдеры</p>
                </div>
                <div class="icon">
                    <i class="ion ion-image"></i>
                </div>
                <a href="<?= ADMIN ?>/slider" class="small-box-footer">Перейти <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?=$specialists_count;?></h3>

                    <p>Наши специалисты</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-people"></i>
                </div>
                <a href="<?= ADMIN ?>/specialist" class="small-box-footer">Перейти <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?=$testimonials_count;?></h3>

                    <p>Отзывы</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?= ADMIN ?>/testimonial" class="small-box-footer">Перейти <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?=$constants_count;?></h3>

                    <p>Константы</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clock"></i>
                </div>
                <a href="<?= ADMIN ?>/constant" class="small-box-footer">Перейти <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->