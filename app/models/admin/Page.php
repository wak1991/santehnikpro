<?php

namespace app\models\admin;


use app\models\AppModel;

class Page extends AppModel
{
    public $attributes = [
        'title' => '',
        'parent_id' => '',
        'keywords' => '',
        'description' => '',
        'alias' => '',
        'url' => '',
        'sort' => '',
    ];

    public $rules = [
        'required' => [
          ['title'],
        ]
    ];
}