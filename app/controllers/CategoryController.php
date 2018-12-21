<?php

namespace app\controllers;

use app\models\Breadcrumbs;

class CategoryController extends AppController
{
    public function indexAction()
    {

    }

    public function viewAction()
    {
        $alias = $this->route['alias'];
        $category = \R::findOne('category', 'alias = ?', [$alias]);
        if (!$category){
            throw new \Exception('Страница не найдена', 404);
        }

        // хлебные крошки
        $bredcrumbs = Breadcrumbs::getBreadcrumbs();

        $constant = \R::findAll('constants');
        $constant = json_decode(json_encode($constant), True);
        $this->setMeta($category->title, 'Описание', 'Ключевики');
        $this->set(compact('constant', 'category'));
    }
}