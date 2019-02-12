<section id="who-we-are">
    <div class="container">
        <div class="row">
            <?php if ($category): ?>
                <?php $i = .5; ?>
                    <?php foreach ($category as $cat): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn" data-wow-duration=".5s" data-wow-delay="<?=$i;?>s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: zoomIn;">
                            <a href="category/<?=$cat['alias'];?>">
                                <div class="img-holder">
                                    <img src="img/category/<?=$cat['img'];?>" alt="">
                                </div>
                            </a>
                <h2><a href="category/<?=$cat['alias'];?>"><?=$cat->title;?></a></h2>
            </div>
                    <?php $i += 0.5; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>