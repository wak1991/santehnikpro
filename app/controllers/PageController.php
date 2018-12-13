<?php

namespace app\controllers;

use app\models\Breadcrumbs;

class PageController extends AppController
{
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $page = \R::findOne('pages', 'alias = ?', [$alias]);
        if (!$page){
            throw new \Exception('Страница не найдена', 404);
        }

        // хлебные крошки
        $bredcrumbs = Breadcrumbs::getBreadcrumbs();

        $constant = \R::findAll('constants');
        $constant = json_decode(json_encode($constant), True);
        $this->setMeta($page->title, 'Описание', 'Ключевики');
        $this->set(compact('constant', 'page'));
    }
}