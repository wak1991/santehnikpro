<?php

namespace app\models\admin;


use app\models\AppModel;

class Specialist extends AppModel
{
    public $attributes = [
        'name' => '',
        'sort' => '',
        'specialty' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
        ]
    ];
}