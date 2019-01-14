<?php

namespace app\controllers\admin;


class TestimonialController extends AppController
{
    public function indexAction()
    {
        $testimonials = \R::find('testimonials', 'ORDER BY sort');
        $this->setMeta('Отзывы наших клиентов');
        $this->set(compact('testimonials'));
    }
}