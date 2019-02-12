<?php

namespace app\controllers\admin;


use app\models\admin\Testimonial;

class TestimonialController extends AppController
{
    public function indexAction()
    {
        $testimonials = \R::find('testimonials', 'ORDER BY sort');
        $this->setMeta('Отзывы наших клиентов');
        $this->set(compact('testimonials'));
    }

    public function addImageAction()
    {
        if (isset($_GET['upload'])){
            if ($_POST['name'] == 'single'){
                $wmax = 124;
                $hmax = 163;
                $folder = '/img/testimonial/';
            }
            $name = $_POST['name'];
            $testimonial = new Testimonial();
            $testimonial->uploadImg($name, $wmax, $hmax, $folder);
        }
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $testimonial = new Testimonial();
            $data = $_POST;
            $testimonial->load($data);
            $testimonial->getImg();
            if (!$testimonial->validate($data)){
                $testimonial->getErrors();
                redirect();
            }
            if ($id = $testimonial->save('testimonials')){
                $testimonial = \R::load('testimonials', $id);
                \R::store($testimonial);
                $_SESSION['success'] = 'Отзыв добавлен';
            }
            redirect(ADMIN . '/testimonial');
        }
        $this->setMeta('Новый Отзыв');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $testimonial = new Testimonial();
            $data = $_POST;
            $testimonial->load($data);
            $testimonial->getImg();
            if (!$testimonial->validate($data)){
                $testimonial->getErrors();
                redirect();
            }
            if ($testimonial->update('testimonials', $id)){
                $testimonial = \R::load('testimonials', $id);
                \R::store($testimonial);
                $_SESSION['success'] = 'Отзыв обновлён';
            }
            redirect(ADMIN . '/testimonial');
        }
        $id = $this->getRequestID();
        $testimonial = \R::load('testimonials', $id);
        $this->setMeta("Редактирование отзыва {$testimonial->name}");
        $this->set(compact('testimonial'));
    }

    public function deleteAction()
    {
        $testimonial_id = $this->getRequestID();
        $testimonial = \R::load('testimonials', $testimonial_id);
        \R::trash($testimonial);
        $_SESSION['success'] = 'Отзыв удалён';
        redirect(ADMIN . '/testimonial');
    }
}