<?php

namespace app\controllers\admin;


class SpecialistController extends AppController
{
    public function indexAction()
    {
        $specialists = \R::find('specialists', 'ORDER BY sort');
        $this->setMeta('Список специалистов');
        $this->set(compact('specialists'));
    }

    public function editAction()
    {
        $specialist_id = $this->getRequestID();
        $specialist = \R::getRow("SELECT * FROM specialists WHERE id = ?", [$specialist_id]);
        if (!$specialist){
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta("Специалист {$specialist['name']}");
        $this->set(compact('specialist'));
    }

    public function deleteAction()
    {
        $specialist_id = $this->getRequestID();
        $specialist = \R::load('specialists', $specialist_id);
        \R::trash($specialist);
        $_SESSION['success'] = 'Специалист удалён';
        redirect(ADMIN . '/specialist');
    }
}