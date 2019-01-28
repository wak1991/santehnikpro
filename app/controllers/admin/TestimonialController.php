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

    public function editAction()
    {
        $testimonial_id = $this->getRequestID();
        $testimonial = \R::getRow("SELECT * FROM testimonials WHERE id = ?", [$testimonial_id]);
        if (!$testimonial){
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta("Отзыв {$testimonial['name']}");
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