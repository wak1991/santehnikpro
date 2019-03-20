<?php

namespace app\controllers\admin;


class MainController extends AppController
{

    public function indexAction()
    {
        $sliders_count = \R::count('sliders');
        $specialists_count = \R::count('specialists');
        $testimonials_count = \R::count('testimonials');
        $constants_count = \R::count('constants');
        $this->setMeta('Панель управления');
        $this->set(compact('sliders_count', 'specialists_count', 'testimonials_count', 'constants_count'));
    }

}