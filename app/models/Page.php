<?php

namespace app\models;


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