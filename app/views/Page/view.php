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
                <?=$breadcrumbs;?>
                </div>
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
                        <h4><?=$pages_name['title'] ?  $pages_name['title'] : 'Меню';?></h4>
                        <ul class="category-list">
                        <?php foreach ($pages as $page):?>
                            <li><a href="<?=$page['url'] ? $page['url'] : "/".$page['alias'];?>"><i class="fa fa-angle-right"></i> <?=$page['title'];?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#our-mission -->
<?php endif;?>
<!-- #/form -->
