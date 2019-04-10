<!-- #page-title -->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- .title -->
                <div class="title pull-left">
                    <h1><?=$page->title;?></h1>
                </div> <!-- /.title -->
                <!-- .page-breadcumb -->
                <div class="page-breadcumb pull-right">
                    <i class="fa fa-home"></i> <a href="<?=PATH;?>">Главная</a> <i class="fa fa-angle-right"></i> <span><?=$page->title;?></span>
                </div> <!-- /.page-breadcumb -->
            </div>
        </div>
    </div>
</section> <!-- /#page-title -->
<!-- #/form -->
<?php if($page->form):?>
<section id="contact-content">
    <div class="container">
        <div class="section-title">
            <h1><?=$page->title;?></h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <form action="mail/mail" class="contact-form" novalidate="novalidate" method="post">
                    <p><input type="text" name="name" placeholder="Имя"></p>
                    <p><input type="text" name="email" placeholder="Email"></p>
                    <p><input type="text" name="phone" placeholder="Телефон"></p>
                    <p><textarea name="content" placeholder="Сообщение"></textarea></p>
                    <p><button type="submit">Отправить запрос</button></p>
                    <?php if(isset($_SESSION['mail']['error'])): ?>
                        <div class="alert alert-danger">
                            <?php echo $_SESSION['mail']['error']; unset($_SESSION['mail']['error']); ?>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['mail']['success'])): ?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION['mail']['success']; unset($_SESSION['mail']['success']); ?>
                        </div>
                    <?php endif; ?>
                </form>
                <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
            <?=$page->text;?>
        </div>
    </div>
</section>
    <?php else:?>
    <!-- #our-mission -->
    <section id="blog-post">
        <div class="container">
            <div class="section-title">
                <h1><?=$page->title;?></h1>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 blog-content">
                    <?=$page->text;?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-3 col-xs-push-0 sidebar">
                    <div class="sidebar-widget">
                    <?php new \app\widgets\menu\Menu([
                        'cacheKey' => 'page_menu',
                        'class' => 'category-list',
                        'cache' => '0',
                        'table' => 'pages',
                        'tpl' => WWW . '/menu/page_menu.php',
                    ]); ?>
                    </div> <!-- /.sidebar-widget -->
                </div>
            </div>
        </div>
    </section> <!-- /#our-mission -->
<?php endif;?>
<!-- #/form -->
