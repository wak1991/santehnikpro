<?php //$parent = isset($category['childs']); ?>
<li>
    <a href="category/<?=$pages['title'];?>"><?=$pages['title'];?></a>
    <?php if (isset($pages['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($pages['childs']); ?>
        </ul>
    <?php endif; ?>
</li>