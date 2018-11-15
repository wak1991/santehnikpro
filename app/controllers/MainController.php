<?php

namespace app\controllers;

class MainController extends AppController
{

    public function indexAction()
    {
        $specialists = \R::find('specialists', 'LIMIT 4');
        $testimonials = \R::find('testimonials', 'LIMIT 3');
        $constant = \R::findAll('constants');
        $constant = json_decode(json_encode($constant), True);
        $sliders = \R::find('sliders', 'ORDER BY sort');
        $this->setMeta('Главная страница', 'Описание', 'Ключевики');
        $this->set(compact('specialists', 'testimonials', 'constant', 'sliders'));
    }
}