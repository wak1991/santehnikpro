<?php

namespace app\controllers\admin;


class PageController extends AppController
{
    public function indexAction()
    {
        $specialists = \R::find('specialists', 'ORDER BY sort');
        $this->setMeta('Список специалистов');
        $this->set(compact('specialists'));
    }
}