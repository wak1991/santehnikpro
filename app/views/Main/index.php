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
                <?= $constant[3]['value']; ?>
            </div>
        </div>
    </div>
</section> <!-- /#promotional-text -->

<!-- #service-we-provide -->
<section id="service-we-provide">
    <div class="container">
        <div class="section-title">
            <h1>Services that we offers</h1>
        </div>
        <!--<div class="row">
            <div class="col-lg-3 col-md-3 wow slideInLeft">
                <div class="service-tab-title">
                    <ul class="clearfix">
                        <li class="active" data-tab-name="drain">Plumbing Leaks</li>
                        <li data-tab-name="bath">Bathroom Plumbing</li>
                        <li data-tab-name="kitchen">Kitchen plumbing</li>
                        <li data-tab-name="outside">outside plumbing</li>
                        <li data-tab-name="broken">Broken Fixtures</li>
                        <li data-tab-name="drain">Drain clogs</li>
                        <li data-tab-name="toilet">Broken toilets</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 wow slideInRight">
                <div class="row">
                    <div class="service-tab-content clearfix">
                        <div id="plumbing">
                            <div class="col-lg-8 col-md-7 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <br> dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent <br> ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo <br> inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="bath">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="kitchen">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="drain">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="toilet">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="broken">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="outside">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus erroroluptatem</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium doloremue</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Laudantium unde </li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Natus error sit volupta</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Accusantium dolor</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="menu">
            <?php new \app\widgets\menu\Menu([
                    'tpl' => WWW . '/menu/menu.php',
            ]); ?>
        </div>
    </div>
</section> <!-- /#service-we-provide -->

<!-- #our-projects -->
<section id="our-projects">
    <div class="container">
        <div class="section-title">
            <h1>OUr projects</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 masonary-gallery">
                <div class="masonary-item width-1">
                    <a class="fancybox" href="img/our-projects/1.jpg"><div class="img-wrap">
                            <img src="img/our-projects/1.jpg" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>Kitchken Maintance</h4>
                                        <span>Pipe Leakages Fixed</span>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="masonary-item width-1">
                    <a class="fancybox" href="img/our-projects/2.jpg"><div class="img-wrap">
                            <img src="img/our-projects/2.jpg" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>Kitchken Maintance</h4>
                                        <span>Pipe Leakages Fixed</span>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="masonary-item width-1 height-1">
                    <a class="fancybox" href="img/our-projects/3.jpg"><div class="img-wrap">
                            <img src="img/our-projects/3.jpg" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>Kitchken Maintance</h4>
                                        <span>Pipe Leakages Fixed</span>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="masonary-item width-1">
                    <a class="fancybox" href="img/our-projects/4.jpg"><div class="img-wrap">
                            <img src="img/our-projects/4.jpg" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>Kitchken Maintance</h4>
                                        <span>Pipe Leakages Fixed</span>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="masonary-item width-2">
                    <a class="fancybox" href="img/our-projects/5.jpg"><div class="img-wrap">
                            <img src="img/our-projects/5.jpg" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>Kitchken Maintance</h4>
                                        <span>Pipe Leakages Fixed</span>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="masonary-item width-1">
                    <a class="fancybox" href="img/our-projects/6.jpg"><div class="img-wrap">
                            <img src="img/our-projects/6.jpg" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>Kitchken Maintance</h4>
                                        <span>Pipe Leakages Fixed</span>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>

            </div>

        </div>
        <div class="view-all-btn"><a href="project-v1.html" class="view-all hvr-bounce-to-right">view all</a></div>
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
<!-- #emergency -->
<section id="emergency">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <img class="wow bounceInLeft" src="img/emergency/man.png" alt="">
            </div>
            <div class="col-lg-offset-3 col-md-offset-3 col-lg-9 col-md-9">
                <h2>Emergency Leaks & <span>Pipe Bursts</span></h2>
                <p>If you have an emergency plumbing need, simply call our 24 hour emergecny plumbing</p>
                <p class="phone-contact"><b>01865 524 8503</b> OR <a href="contact.html" class="hvr-bounce-to-right">Contact Us</a></p>
            </div>
        </div>
    </div>
</section> <!-- /#emergency -->
