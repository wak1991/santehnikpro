<?php

namespace app\controllers\admin;


class SpecialistController extends AppController
{
    public function indexAction()
    {
        $specialists = \R::find('specialists', 'ORDER BY sort');
        $this->setMeta('Список специалистов');
        $this->set(compact('specialists'));
    }
}