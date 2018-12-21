<!-- #page-title -->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- .title -->
                <div class="title pull-left">
                    <h1><?=$category->title;?></h1>
                </div> <!-- /.title -->
                <!-- .page-breadcumb -->
                <div class="page-breadcumb pull-right">
                    <i class="fa fa-home"></i> <a href="<?=PATH;?>">Главная</a> <i class="fa fa-angle-right"></i> <span><?=$category->title;?></span>
                </div> <!-- /.page-breadcumb -->
            </div>
        </div>
    </div>
</section> <!-- /#page-title -->

<!-- #our-mission -->
<section id="our-mission">
    <div class="container">
        <div class="section-title">
            <h1><?=$category->title;?></h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?=$category->text;?>
            </div>
        </div>
    </div>
</section> <!-- /#our-mission -->