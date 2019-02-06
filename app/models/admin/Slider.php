<?php

namespace app\models\admin;


use app\models\AppModel;

class Slider extends AppModel
{
    public $attributes = [
        'title' => '',
        'img' => '',
        'sort' => '',
        'description' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ]
    ];
}