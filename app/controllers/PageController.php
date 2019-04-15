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
        $pages = \R::find('pages', 'WHERE parent_id = ' . $page['parent_id']);
        $pages_name = \R::findOne('pages', 'id = ?', [$page['parent_id']]);
        // хлебные крошки
        $breadcrumbs = Breadcrumbs::getBreadcrumbs($page->parent_id, $page->title);

        $this->setMeta($page->title, $page->description, $page->keywords);
        $this->set(compact('page', 'pages', 'pages_name', 'breadcrumbs'));
    }

}