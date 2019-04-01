<?php

namespace app\controllers\admin;


class MailController extends AppController
{

    public function indexAction()
    {
        $mails = \R::find('mails');
        $this->setMeta('Письма с сайта');
        $this->set(compact('mails'));
    }

    public function deleteAction()
    {
        $mail_id = $this->getRequestID();
        $mail = \R::load('mails', $mail_id);
        \R::trash($mail);
        $_SESSION['success'] = 'Письмо удалено';
        redirect(ADMIN . '/mail');
    }

}