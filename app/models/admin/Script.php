<?php

namespace app\models\admin;


use app\models\AppModel;

class Script extends AppModel
{
    public $attributes = [
        'name' => '',
        'sort' => '',
        'value' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
        ]
    ];
}