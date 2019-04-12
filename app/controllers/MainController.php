<?php

namespace app\controllers;

class MainController extends AppController
{

    public function indexAction()
    {
        $specialists = \R::find('specialists', 'ORDER BY sort LIMIT 4');
        $testimonials = \R::find('testimonials', 'ORDER BY sort LIMIT 3');
        $sliders = \R::find('sliders', 'ORDER BY sort');
        $title_home = \R::findOne('constants', 'name = ?', ['title_home']);
        $desc_home = \R::findOne('constants', 'name = ?', ['desc_home']);
        $keywords_home = \R::findOne('constants', 'name = ?', ['keywords_home']);
        $this->setMeta(strip_tags($title_home['value']), strip_tags($desc_home['value']), strip_tags($keywords_home['value']));
        $this->set(compact('specialists', 'testimonials', 'sliders'));
    }
}