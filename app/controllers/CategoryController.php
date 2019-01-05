<?php

namespace app\controllers;

use app\models\Breadcrumbs;

class CategoryController extends AppController
{
    public function indexAction()
    {
        $category = \R::findAll('category');
        $this->setMeta('Тайтл', 'Описание', 'Ключевики');
        $this->set(compact('category'));
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

        $this->setMeta($category->title, 'Описание', 'Ключевики');
        $this->set(compact('category'));
    }
}