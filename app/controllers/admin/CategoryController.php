<?php

namespace app\controllers\admin;


use app\models\AppModel;
use app\models\Category;
use ishop\App;

class CategoryController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Список категорий');
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            if (!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            if ($id = $category->save('category')){
                $alias = AppModel::createAlias('category', 'alias', $data['title'], $id);
                $category = \R::load('category', $id);
                $category->alias = $alias;
                \R::store($category);
                $_SESSION['success'] = 'Категория добавлена';
            }
            redirect(ADMIN . '/category');
        }
        $this->setMeta('Новая категория');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            if (!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            if ($category->update('category', $id)){
                $alias = AppModel::createAlias('category', 'alias', $data['title'], $id);
                $category = \R::load('category', $id);
                $category->alias = $alias;
                \R::store($category);
                $_SESSION['success'] = 'Категория обновлена';
            }
            redirect(ADMIN . '/category');
        }
        $id = $this->getRequestID();
        $category = \R::load('category', $id);
        App::$app->setProperty('parent_id', $category->parent_id);
        $this->setMeta("Редактирование категории {$category->title}");
        $this->set(compact('category'));
    }

    public function deleteAction()
    {
        $category_id = $this->getRequestID();
        $category = \R::load('category', $category_id);
        \R::trash($category);
        $_SESSION['success'] = 'Категория удалёна';
        redirect(ADMIN . '/category');
    }
}