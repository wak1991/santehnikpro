<?php

namespace app\models\admin;


use app\models\AppModel;

class Slider extends AppModel
{
    public $attributes = [
        'title' => '',
        'sort' => '',
        'description' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ]
    ];

}