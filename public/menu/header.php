<li <?php if (isset($category['childs'])) echo "class=\"dropdown\"";?>>
    <a href="page/<?=$category['alias'];?>"><?=$category['title'];?></a>
    <?php if (isset($category['childs'])): ?>
        <ul class="submenu">
            <?= $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>