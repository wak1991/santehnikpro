<?php

namespace app\controllers\admin;


use app\models\admin\Specialist;
use ishop\App;

class SpecialistController extends AppController
{
    public function indexAction()
    {
        $specialists = \R::find('specialists', 'ORDER BY sort');
        $this->setMeta('Список специалистов');
        $this->set(compact('specialists'));
    }

    public function addImageAction()
    {
        if (isset($_GET['upload'])){
            if ($_POST['name'] == 'single'){
                $wmax = 214;
                $hmax = 298;
                $folder = '/img/our-specialist/';
            }
            $name = $_POST['name'];
            $specialist = new Specialist();
            $specialist->uploadImg($name, $wmax, $hmax, $folder);
        }
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $specialist = new Specialist();
            $data = $_POST;
            $specialist->load($data);
            $specialist->getImg();
            if (!$specialist->validate($data)){
                $specialist->getErrors();
                redirect();
            }
            if ($id = $specialist->save('specialists')){
                $specialist = \R::load('specialists', $id);
                \R::store($specialist);
                $_SESSION['success'] = 'Специалист добавлен';
            }
            redirect(ADMIN . '/specialist');
        }
        $this->setMeta('Новый Специалист');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $specialist = new Specialist();
            $data = $_POST;
            $specialist->load($data);
            $specialist->getImg();
            if (!$specialist->validate($data)){
                $specialist->getErrors();
                redirect();
            }
            if ($specialist->update('specialists', $id)){
                $specialist = \R::load('specialists', $id);
                \R::store($specialist);
                $_SESSION['success'] = 'Слайдер обновлён';
            }
            redirect(ADMIN . '/specialist');
        }
        $id = $this->getRequestID();
        $specialist = \R::load('specialists', $id);
        $this->setMeta("Редактирование специалиста {$specialist->name}");
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