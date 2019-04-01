<?php

namespace app\controllers\admin;


use app\models\admin\Constant;

class ConstantController extends AppController
{
    public function indexAction()
    {
        $constants = \R::find('constants', 'ORDER BY sort');
        $this->setMeta('Константы');
        $this->set(compact('constants'));
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $constant = new Constant();
            $data = $_POST;
            $constant->load($data);
            if (!$constant->validate($data)){
                $constant->getErrors();
                redirect();
            }
            if ($id = $constant->save('constants')){
                $constant = \R::load('constants', $id);
                \R::store($constant);
                $_SESSION['success'] = 'Константа добавлена';
            }
            redirect(ADMIN . '/constant');
        }
        $this->setMeta('Новая константа');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $constant = new Constant();
            $data = $_POST;
            $constant->load($data);
            if (!$constant->validate($data)){
                $constant->getErrors();
                redirect();
            }
            if ($constant->update('constants', $id)){
                $constant = \R::load('constants', $id);
                \R::store($constant);
                $_SESSION['success'] = 'Константа обновлена';
            }
            redirect(ADMIN . '/constant');
        }
        $id = $this->getRequestID();
        $constant = \R::load('constants', $id);
        $this->setMeta("Редактирование константы {$constant->name}");
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