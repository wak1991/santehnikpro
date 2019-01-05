<!-- #banner -->
<?php if ($sliders): ?>
<section id="banner">
    <div class="banner-container">
        <div class="banner home-v1">
            <ul>
                <?php foreach ($sliders as $slider): ?>
                    <li
                    class="slider-2"
                    data-transition="fade"
                    data-slotamount="7"
                    data-thumb="img/slides/<?=$slider->img;?>"
                    data-title="<?=$slider->title;?>">

                    <img
                        src="img/slides/<?=$slider->img;?>"
                        data-bgrepeat="no-repeat"
                        data-bgfit="cover"
                        data-bgposition="top center"
                        alt="<?=$slider->title;?>">

                    <div
                        class="caption skewfromright  light-plumber-slider-caption tp-resizeme"
                        data-x="0"
                        data-y="200"
                        data-speed="600"
                        data-start="1700"
                        data-easing="easeOutBack">

                        <h1><?=$slider->title;?></h1>
                    </div>
                    <div
                        class="caption randomrotate bold-plumber-slider-caption tp-resizeme"
                        data-x="0"
                        data-y="250"
                        data-speed="500"
                        data-start="2200"
                        data-easing="easeOutBack">

                        <h1><?=$slider->description;?></h1>
                    </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section> <!-- /#banner -->
<?php endif; ?>


<!-- #promotional-text -->
<section id="promotional-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?php new \app\widgets\constants\Constants('text_slider');?>
            </div>
        </div>
    </div>
</section> <!-- /#promotional-text -->

<!-- #service-we-provide -->
<section id="service-we-provide">
    <div class="container">
        <div class="section-title">
            <h1>Каталог услуг</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 wow slideInLeft">
                <div class="service-tab-title">
                    <?php new \app\widgets\menu\Menu([
                            'tpl' => WWW . '/menu/menu.php',
                            'class' => 'clearfix',
                            'cacheKey' => 'menu',
                    ]); ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 wow slideInRight">
                <div class="row">
                        <?php new \app\widgets\menu\Menu([
                            'tpl' => WWW . '/menu/menu2.php',
                            'container' => 'div',
                            'class' => 'service-tab-content clearfix',
                            'cacheKey' => 'menu2',
                        ]); ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#service-we-provide -->

<!-- #our-projects -->
<section id="our-projects">
    <div class="container">
        <?php new \app\widgets\constants\Constants('our_proects');?>
    </div>
</section> <!-- /#our-projects -->

<!-- #our-specialist -->
<?php if($specialists): ?>
<section id="our-specialist">
    <div class="container">
        <div class="section-title">
            <h1>Наши специалисты</h1>
        </div>
        <div class="row">
            <?php $i = 0; ?>
            <?php foreach ($specialists as $specialis): ?>

                <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="<?= $i; ?>s">
                <!-- .single-member -->
                <div class="single-member hvr-bounce-to-bottom">
                    <img src="img/our-specialist/<?=$specialis->img;?>" alt="">
                    <div class="info hvr-bounce-to-top">
                        <h2><?=$specialis->name;?></h2>
                        <p class="position"><?=$specialis->specialty;?></p>
                    </div>
                </div> <!-- /.single-member -->
            </div>
                <?php $i += 0.5; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section> <!-- /#our-specialist -->
<?php endif; ?>
<!-- #testimonials -->
<?php if($testimonials): ?>
<section id="testimonials">
    <div class="container">
        <div class="section-title">
            <h1>Отзывы наших клиентов</h1>
        </div>
        <div class="row">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="col-lg-4 col-md-4 col-sm-6 wow bounceInLeft hvr-float-shadow">
                <!-- .single-testimonial -->
                <div class="single-testimonial  hvr-bounce-to-bottom">
                    <div class="profile-info pull-left">
                        <img src="img/testimonial/<?= $testimonial->img; ?>" alt="">
                        <h2><?= $testimonial->name; ?></h2>
                    </div>
                    <div class="content pull-left">
                        <p><i class="fa fa-quote-left"></i> <?= $testimonial->description; ?></p>
                    </div>
                </div> <!-- /.single-testimonial -->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>	<!-- /#testimonials -->
<?php endif; ?>