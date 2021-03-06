<?php
namespace app\models;

use ishop\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class Mail extends AppModel
{

    public $attributes = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'content' => '',
    ];

    public static function mail($email)
    {
        $transport = (new Swift_SmtpTransport(App::$app->getProperty('smtp_host'), App::$app->getProperty('smtp_port'), App::$app->getProperty('smtp_protocol')))
            ->setUsername(App::$app->getProperty('smtp_login'))
            ->setPassword(App::$app->getProperty('smtp_password'))
        ;

        $mailer = new Swift_Mailer($transport);

        ob_start();
        require APP . '/views/mail/mail_client.php';
        $body_client = ob_get_clean();

        ob_start();
        require APP . '/views/mail/mail_admin.php';
        $body_admin = ob_get_clean();

        $message_client = (new Swift_Message('Запрос с сайта клиенту'))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
            ->setTo($email)
            ->setBody($body_client, 'text/html')
        ;

        $message_admin = (new Swift_Message('Запрос с сайта админу'))
            ->setFrom([App::$app->getProperty('smtp_login') => App::$app->getProperty('shop_name')])
            ->setTo(App::$app->getProperty('admin_email'))
            ->setBody($body_admin, 'text/html')
        ;

        $result = $mailer->send($message_client);
        $result = $mailer->send($message_admin);
    }

}