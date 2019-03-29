<?php

namespace app\widgets\Scripts;


class Scripts
{

    public function __construct()
    {
        $scripts = \R::find('scripts');
        foreach ($scripts as $script){
            echo $script['value'];
        }
    }

}