<?php

namespace app\controllers;


use app\models\Mail;

class MailController extends AppController
{
    public function mailAction()
    {
        if (!empty($_POST)){
            $mail = new Mail();
            $data = $_POST;
            $mail->load($data);
            if (!$mail->validate($data)){
                $mail->getErrors();
                $_SESSION['form_data'] = $data;
            }else{
                if ($mail->save('mails')){
                    $_SESSION['mail']['success'] = 'Письмо отправлено';
                }else{
                    $_SESSION['mail']['error'] = 'Ошибка';
                }
            }
//            redirect();
        }
    }
}