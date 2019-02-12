<?php

namespace app\controllers\admin;


use app\models\admin\Slider;
use ishop\App;

class SliderController extends AppController
{
    public function indexAction()
    {
        $sliders = \R::find('sliders', 'ORDER BY sort');
        $this->setMeta('Слайдеры');
        $this->set(compact('sliders'));
    }

    public function addImageAction()
    {
        if (isset($_GET['upload'])){
            if ($_POST['name'] == 'single'){
                $wmax = 1920;
                $hmax = 595;
                $folder = '/img/slides/';
            }
            $name = $_POST['name'];
            $slider = new Slider();
            $slider->uploadImg($name, $wmax, $hmax, $folder);
        }
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $slider = new Slider();
            $data = $_POST;
            $slider->load($data);
            $slider->getImg();
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
            $id = $this->getRequestID(false);
            $slider = new Slider();
            $data = $_POST;
            $slider->load($data);
            $slider->getImg();
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