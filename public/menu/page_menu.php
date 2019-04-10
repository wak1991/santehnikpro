<?php $parent_id = \ishop\App::$app->getProperty('parent_id'); ?>

<?php if (isset($category['childs'])): ?>
    <li>


        <a href="page/<?=$category['alias'];?>"><i class="fa fa-angle-right"></i> <?=$category['title'];?><?=$parent_id;?></a>


        <?php if (isset($category['childs'])): ?>

                <?= $this->getMenuHtml($category['childs']); ?>

        <?php endif; ?>



    </li>
<?php endif; ?>