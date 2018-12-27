<?php

namespace app\widgets\constants;


class Constants
{

    public function __construct($options)
    {
        $constant = \R::findOne('constants', 'name = ?', [$options]);
        echo $constant['value'];
    }

}