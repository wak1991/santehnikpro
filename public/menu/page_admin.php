<?php
$parent = isset($category['childs']);
if(!$parent){
    $delete = '<a href="' . ADMIN . '/pages/delete?id=' . $id . '" class="delete"><i class="fa fa-fw fa-trash text-danger"></i></a>';
}else{
    $delete = '<i class="fa fa-fw fa-trash"></i>';
}
?>
<p class="item-p">
    <a class="list-group-item" href="<?= ADMIN; ?>/page/edit?id=<?=$id?>"><?=$category['title'];?></a> <span><?=$delete;?></span>
</p>
<?php if ($parent): ?>
    <div class="list-group">
        <?= $this->getMenuHtml($category['childs']); ?>
    </div>
<?php endif; ?>
