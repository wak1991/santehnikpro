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
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <form action="mail/signup" class="contact-form" novalidate="novalidate">
                    <p><input type="text" name="name" placeholder="Имя"></p>
                    <p><input type="text" name="email" placeholder="Email"></p>
                    <p><input type="text" name="phone" placeholder="Телефон"></p>
                    <p><textarea name="message" placeholder="Сообщение"></textarea></p>
                    <p><button type="submit">Отправить запрос</button></p>
                </form>
            </div>
        </div>
    </div>
</section>
    <?php else:?>
    <!-- #our-mission -->
    <section id="our-mission">
        <div class="container">
            <div class="section-title">
                <h1><?=$page->title;?></h1>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?=$page->text;?>
                </div>
            </div>
        </div>
    </section> <!-- /#our-mission -->
<?php endif;?>
<!-- #/form -->
