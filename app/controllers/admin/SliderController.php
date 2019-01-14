<?php

namespace app\controllers\admin;


class SliderController extends AppController
{
    public function indexAction()
    {
        $sliders = \R::find('sliders', 'ORDER BY sort');
        $this->setMeta('Слайдеры');
        $this->set(compact('sliders'));
    }
}