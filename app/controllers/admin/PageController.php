<?php

namespace app\controllers\admin;


use app\models\Page;

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

            }
        }
        $this->setMeta('Новая страница');
    }
}