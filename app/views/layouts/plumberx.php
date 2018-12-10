
<!DOCTYPE html>
<html lang="ru">
<head>
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
                <?= $constant[1]['value']; ?>
            </div> <!-- /.social -->
            <div class="contact-info pull-right">
                <ul>
                    <?= $constant[2]['value']; ?>
                </ul>
            </div> <!-- /.contact-info -->
        </div>
    </div>
</section> <!-- /#topbar -->

<!-- header -->
<header>
    <div class="search-box">
        <div class="container">
            <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <form action="#">
                    <input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="cart-box">
        <div class="container">
            <div class="pull-right cart col-lg-6 col-xs-12">
                <p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
                <a href="index.html">
                    <img src="img/resources/logo.png" alt="Plumberx">
                </a>
            </div>
            <nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container">
                <ul class="top-icons-wrap pull-right">
                    <li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
                    <li class="top-icons cart"><a href="#"><i class="icon icon-ShoppingCart"></i></a></li>
                </ul>
                <button class="mainmenu-toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <!--                 <ul class="mainmenu pull-right">
                <!--                    <li class="dropdown">-->
<!--                        <a href="#" class="hvr-overline-from-left">Pages</a>-->
<!--                        <ul class="submenu">-->
<!--                            <li><a href="search-result.html">Search Results</a></li>-->
<!--                            <li><a href="no-search-results.html">No serarch result</a></li>-->
<!--                            <li><a href="404.html">404 Page</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="contact.html" class="hvr-overline-from-left">Contact Us</a></li>-->
<!--                </ul>-->
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

<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="request-for-qoute-wrap"><a href="contact.html" class="request-for-qoute wow slideInDown hvr-bounce-to-right">Request for a Free Quote</a></div>
                <nav class="footer-menu">
                    <button class="footer-nav-toggler hvr-bounce-to-right">Footer Menu <i class="fa fa-bars"></i></button>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="project-v1.html">Projects</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
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
                <p>Copyright &copy; Plumberx 2015. All rights reserved. </p>
            </div> <!-- /.copyright -->
            <!-- .credit -->
            <div class="credit pull-right">
                <p>Created by: DesignArc</p>
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

<?php
$logs = R::getDatabaseAdapter()
->getDatabase()
->getLogger();

debug( $logs->grep( 'SELECT' ) );
?>

</body>
</html>