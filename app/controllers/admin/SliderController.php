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

    public function editAction()
    {
        $slider_id = $this->getRequestID();
        $slider = \R::getRow("SELECT * FROM sliders WHERE id = ?", [$slider_id]);
        if (!$slider){
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta("Слайдер {$slider['title']}");
        $this->set(compact('slider'));
    }

    public function deleteAction()
    {
        $slider_id = $this->getRequestID();
        $slider = \R::load('sliders', $slider_id);
        \R::trash($slider);
        $_SESSION['success'] = 'Слайдер удалён';
        redirect(ADMIN . '/slider');
    }
}