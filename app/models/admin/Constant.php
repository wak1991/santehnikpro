<?php

namespace app\models\admin;


use app\models\AppModel;

class Constant extends AppModel
{
    public $attributes = [
        'name' => '',
        'sort' => '',
        'description' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
        ]
    ];
}