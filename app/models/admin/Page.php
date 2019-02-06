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
    ];

    public $rules = [
        'required' => [
          ['title'],
        ]
    ];
}