<?php

namespace app\controllers;


use app\models\Mail;

class MailController extends AppController
{
    public function mailAction()
    {
        if (!empty($_POST['name'])){
            $mail = new Mail();
            $data = $_POST;
            $mail->load($data);
            $mail->h($data);
            if (!$mail->validate($data)){
                $mail->getErrors();
                $_SESSION['form_data'] = $data;
            }else{
                if ($mail->save('mails')){
                    $_SESSION['mail']['success'] = 'Письмо отправлено';
                    Mail::mail($_POST['email']);
                }else{
                    $_SESSION['mail']['error'] = 'Ошибка';
                }
            }
        }
        redirect();
    }
}