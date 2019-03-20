<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <?=$this->getMeta();?>
    <!-- Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- main stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">


    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script>
    <![endif]-->


</head>
<body>

<!-- preloader -->
<div class="preloader"></div>

<!-- #topbar -->
<section id="topbar">
    <div class="container">
        <div class="row">
            <div class="social pull-left">
                <?php new \app\widgets\constants\Constants('social');?>
            </div> <!-- /.social -->
            <div class="contact-info pull-right">
                <ul>
                    <?php new \app\widgets\constants\Constants('contact_info');?>
                </ul>
            </div> <!-- /.contact-info -->
        </div>
    </div>
</section> <!-- /#topbar -->

<!-- header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
                <a href="<?=PATH;?>">
                    <img src="img/resources/logo.png" alt="Plumberx">
                </a>
            </div>
            <nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container">
                    <?php new \app\widgets\menu\Menu([
                        'cacheKey' => 'header',
                        'class' => 'mainmenu pull-right',
                        'table' => 'pages',
                        'tpl' => WWW . '/menu/header.php',
                    ]); ?>

            </nav>
        </div>
    </div>
</header> <!-- /header -->

<div class="content">
    <?=$content;?>
</div>

<!-- #emergency -->
<section id="emergency" class="team-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img class="wow bounceInLeft" src="img/emergency/man.png" alt="">
            </div>
            <div class="col-lg-offset-3 col-lg-9">
                <h2>Аварийная утечка &amp; <span>Лопнула труба</span></h2>					<p>Звоните нам и мы оперативно решим вашу сантехнику <b>в любое для вас время.</b></p>					<p class="phone-contact"><b>+375 (44) 454-04-44</b> или <a href="?view=contact" class="hvr-bounce-to-right">Контакты</a></p>
            </div>
        </div>
    </div>
</section><!-- /#emergency -->
<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="request-for-qoute-wrap"><a href="mailto:santehkostya@mail.ru" class="request-for-qoute wow slideInDown hvr-bounce-to-right">Ответим на все Ваши вопросы</a></div>
                <nav class="footer-menu">
                    <button class="footer-nav-toggler hvr-bounce-to-right">Меню <i class="fa fa-bars"></i></button>
                    <?php new \app\widgets\menu\Menu([
                        'cacheKey' => 'footer',
                        'table' => 'pages',
                        'tpl' => WWW . '/menu/footer.php',
                        'class' => '',
                    ]); ?>
                </nav>
            </div>
        </div>
    </div>
</footer> <!-- /footer -->

<!-- #bottom-bar -->
<section id="bottom-bar">
    <div class="container">
        <div class="row">
            <!-- .copyright -->
            <div class="copyright pull-left">
                <p>Created by: Anatol & Company</p>
            </div> <!-- /.copyright -->
            <!-- .credit -->
            <div class="credit pull-right">
                <p><?= date("Y"); ?></p>
            </div> <!-- /.credit -->
        </div>
    </div>
</section><!-- /#bottom-bar -->



<script src="js/jquery.min.js"></script> <!-- jQuery JS -->
<script src="js/bootstrap.min.js"></script> <!-- BootStrap JS -->
<script src="http://maps.google.com/maps/api/js"></script> <!-- Gmap Helper -->
<script src="js/gmap.js"></script> <!-- gmap JS -->
<script src="js/wow.js"></script> <!-- WOW JS -->
<script src="js/isotope.pkgd.min.js"></script> <!-- iSotope JS -->
<script src="js/owl.carousel.min.js"></script> <!-- OWL Carousle JS -->
<script src="js/jquery.themepunch.tools.min.js"></script> <!-- Revolution Slider Tools -->
<script src="js/jquery.themepunch.revolution.min.js"></script> <!-- Revolution Slider -->
<script src="js/jquery.fancybox.pack.js"></script> <!-- FancyBox -->
<script src="js/validate.js"></script> <!-- Form Validator JS -->
<script src="js/jquery.easing.min.js"></script> <!-- jquery easing JS -->
<script src="js/custom.js"></script> <!-- Custom JS -->
<script src="js/my.js"></script>

<?php
if (DEBUG) {
    $logs = R::getDatabaseAdapter()
        ->getDatabase()
        ->getLogger();

    debug($logs->grep('SELECT'));
}
?>

</body>
</html>