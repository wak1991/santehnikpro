<?php

namespace app\controllers\admin;


class ConstantController extends AppController
{
    public function indexAction()
    {
        $constants = \R::find('constants', 'ORDER BY sort');
        $this->setMeta('Константы');
        $this->set(compact('constants'));
    }
}