<?php

namespace app\controllers\admin;


use app\models\admin\Slider;

class SliderController extends AppController
{
    public function indexAction()
    {
        $sliders = \R::find('sliders', 'ORDER BY sort');
        $this->setMeta('Слайдеры');
        $this->set(compact('sliders'));
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $slider = new Slider();
            $slider->loadImg();
            $data = $_POST;
            $slider->load($data);
            if (!$slider->validate($data)){
                $slider->getErrors();
                redirect();
            }
            if ($id = $slider->save('sliders')){
                $slider = \R::load('sliders', $id);
                \R::store($slider);
                $_SESSION['success'] = 'Слайдер добавлен';
            }
            redirect(ADMIN . '/slider');
        }
        $this->setMeta('Новый слайдер');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            debug($_POST); die;
            $id = $this->getRequestID(false);
            $slider = new Slider();
            $data = $_POST;
            $slider->load($data);
            if (!$slider->validate($data)){
                $slider->getErrors();
                redirect();
            }
            if ($slider->update('sliders', $id)){
                $slider = \R::load('sliders', $id);
                \R::store($slider);
                $_SESSION['success'] = 'Слайдер обновлён';
            }
            redirect(ADMIN . '/slider');
        }
        $id = $this->getRequestID();
        $slider = \R::load('sliders', $id);
        $this->setMeta("Редактирование слайдера {$slider->title}");
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