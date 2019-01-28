<?php

namespace app\controllers\admin;


class ConstantController extends AppController
{
    public function indexAction()
    {
        $constants = \R::find('constants', 'ORDER BY sort');
        $this->setMeta('Константы');
        $this->set(compact('constants'));
    }

    public function editAction()
    {
        $constant_id = $this->getRequestID();
        $constant = \R::getRow("SELECT * FROM constants WHERE id = ?", [$constant_id]);
        if (!$constant){
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta("Константа {$constant['description']}");
        $this->set(compact('constant'));
    }

    public function deleteAction()
    {
        $constant_id = $this->getRequestID();
        $constant = \R::load('constants', $constant_id);
        \R::trash($constant);
        $_SESSION['success'] = 'Константа удалёна';
        redirect(ADMIN . '/constant');
    }
}