<li <?php if (isset($category['childs'])) echo "class=\"dropdown\"";?>>
    <?php
    if (!empty($category['url'])){
        echo "<a href=\"/" . $category['url'];
    }else {
        echo "<a href=\"page/" . $category['alias'];
    }
    ?>"><?=$category['title'];?></a>
    <?php if (isset($category['childs'])): ?>
        <ul class="submenu">
            <?= $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>