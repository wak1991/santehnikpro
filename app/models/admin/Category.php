<?php

namespace app\models\admin;


use app\models\AppModel;

class Category extends AppModel
{
    public $attributes = [
        'title' => '',
        'parent_id' => '',
        'keywords' => '',
        'description' => '',
        'alias' => '',
        'sort' => '',
        'text' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ]
    ];
}