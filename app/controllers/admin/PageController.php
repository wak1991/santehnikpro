<?php

namespace app\controllers\admin;


use app\models\AppModel;
use app\models\Page;
use ishop\App;

class PageController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Список страниц');
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $page = new Page();
            $data = $_POST;
            $page->load($data);
            if (!$page->validate($data)){
                $page->getErrors();
                redirect();
            }
            if ($id = $page->save('pages')){
                $alias = AppModel::createAlias('pages', 'alias', $data['title'], $id);
                $page = \R::load('category', $id);
                $page->alias = $alias;
                \R::store($page);
                $_SESSION['success'] = 'Страница добавлена';
            }
            redirect(ADMIN . '/page');
        }
        $this->setMeta('Новая страница');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $page = new Page();
            $data = $_POST;
            $page->load($data);
            if (!$page->validate($data)){
                $page->getErrors();
                redirect();
            }
            if ($page->update('pages', $id)){
                $alias = AppModel::createAlias('pages', 'alias', $data['title'], $id);
                $page = \R::load('category', $id);
                $page->alias = $alias;
                \R::store($page);
                $_SESSION['success'] = 'Страница обновлена';
            }
            redirect(ADMIN . '/page');
        }
        $id = $this->getRequestID();
        $page = \R::load('pages', $id);
        App::$app->setProperty('parent_id', $page->parent_id);
        $this->setMeta("Редактирование страницы {$page->title}");
        $this->set(compact('page'));
    }
}