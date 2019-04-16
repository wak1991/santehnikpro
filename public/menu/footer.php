<li><?php
    if (!empty($category['url'])){
        echo "<a href=\"/" . $category['url'];
    }else {
        echo "<a href=\"/" . $category['alias'];
    }
    ?>"><?=$category['title'];?></a></li>