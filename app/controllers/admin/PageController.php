<?php

namespace app\controllers\admin;


class PageController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Список страниц');
    }
}