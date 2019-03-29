<?php

namespace app\controllers\admin;


use app\models\admin\Script;

class ScriptController extends AppController
{

    public function indexAction()
    {
        $scripts = \R::find('scripts', 'ORDER BY sort');
        $this->setMeta('Скрипты');
        $this->set(compact('scripts'));
    }

    public function addAction()
    {
        if (!empty($_POST)){
            $script = new Script();
            $data = $_POST;
            $script->load($data);
            if (!$script->validate($data)){
                $script->getErrors();
                redirect();
            }
            if ($id = $script->save('scripts')){
                $script = \R::load('scripts', $id);
                \R::store($script);
                $_SESSION['success'] = 'Скрипт добавлен';
            }
            redirect(ADMIN . '/script');
        }
        $this->setMeta('Новый скрипт');
    }

    public function editAction()
    {
        if (!empty($_POST)){
            $id = $this->getRequestID(false);
            $script = new Script();
            $data = $_POST;
            $script->load($data);
            if (!$script->validate($data)){
                $script->getErrors();
                redirect();
            }
            if ($script->update('scripts', $id)){
                $script = \R::load('scripts', $id);
                \R::store($script);
                $_SESSION['success'] = 'Скрипт обновлен';
            }
            redirect(ADMIN . '/script');
        }
        $id = $this->getRequestID();
        $script = \R::load('scripts', $id);
        $this->setMeta("Редактирование скрипта {$script->name}");
        $this->set(compact('script'));
    }

    public function deleteAction()
    {
        $script_id = $this->getRequestID();
        $script = \R::load('scripts', $script_id);
        \R::trash($script);
        $_SESSION['success'] = 'Скрипт удалён';
        redirect(ADMIN . '/script');
    }

}