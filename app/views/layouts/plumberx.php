
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
                <ul class="mainmenu pull-right">
                    <li class="dropdown current">
                        <a href="index.html" class="hvr-overline-from-left">Home</a>
                        <ul class="submenu">
                            <li><a href="index-v2.html">One Page Version</a></li>
                            <li class="dropdown">
                                <a href="header-v1.html">Header Variations</a>
                                <ul class="submenu">
                                    <li><a href="header-v1.html">Header V1</a></li>
                                    <li><a href="header-v2.html">Header V2</a></li>
                                    <li><a href="header-v3.html">Header V3</a></li>
                                    <li><a href="header-v4.html">Header V4</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="about.html" class="hvr-overline-from-left">About Us</a>
                        <ul class="submenu">
                            <li><a href="team.html">Our Team</a></li>
                            <li class="dropdown"><a href="testimonials-v1.html">Testimonial</a>
                                <ul class="submenu">
                                    <li><a href="testimonials-v1.html">Testimonial V1</a></li>
                                    <li><a href="testimonials-v2.html">Testimonial V2</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="hvr-overline-from-left">Pages</a>
                        <ul class="submenu">
                            <li><a href="search-result.html">Search Results</a></li>
                            <li><a href="no-search-results.html">No serarch result</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="services.html" class="hvr-overline-from-left">Services</a>
                        <ul class="submenu">
                            <li><a href="pricing.html">Pricing</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="project-v1.html" class="hvr-overline-from-left">Projects</a>
                        <ul class="submenu">
                            <li><a href="project-v1.html">Projects V1</a></li>
                            <li><a href="project-v2.html">Projects V2</a></li>
                            <li><a href="project-v3.html">Projects V3</a></li>
                            <li><a href="project-v4.html">Projects V4</a></li>
                            <li><a href="project-v5.html">Projects V5</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="shop.html" class="hvr-overline-from-left">Shop</a>
                        <ul class="submenu">
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="cart-page.html">Cart Page</a></li>
                            <li><a href="checkout-page.html">Checkout Page</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="blog.html" class="hvr-overline-from-left">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog-v2.html">Blog Style Two</a></li>
                            <li><a href="blog-v3.html">Blog Style Three</a></li>
                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html" class="hvr-overline-from-left">Contact Us</a></li>
                </ul>
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
        <div class="row">
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consect- <br>etur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali qua. Ut enim ad minim veniam, quis no strud exercitation ullamco. Ut enim ad minim.</p>
                <a href="#" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a>
                <ul class="social">
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="hvr-radial-out"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>popular Posts</h3>
                <ul class="popular-post">
                    <li>
                        <a href="#"><h5>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</h5></a>
                        <p class="date">June 02, 2015</p>
                    </li>
                    <li>
                        <a href="#"><h5>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</h5></a>
                        <p class="date">June 02, 2015</p>
                    </li>
                    <li>
                        <a href="#"><h5>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</h5></a>
                        <p class="date">June 02, 2015</p>
                    </li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>Get in Touch</h3>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i> Lorance Road 542B, Tailstoi Town <br>5248 MT, Wordwide Country</li>
                    <li><i class="fa fa-phone"></i> 01865 524 8503</li>
                    <li><i class="fa fa-envelope-o"></i> contact@plumberx.com</li>
                    <li><i class="fa fa-globe"></i> http://plumberx.com</li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <img class="positioned wow slideInUp " src="img/resources/footer-man.png" alt="">
            </div> <!-- /.widget -->
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