<?php

namespace app\models\admin;


use app\models\AppModel;

class Slider extends AppModel
{
    public $attributes = [
        'title' => '',
        'img' => '',
        'sort' => '',
        'description' => '',
    ];

    public $rules = [
        'required' => [
            ['title'],
        ]
    ];

    public function loadImg()
    {
        $uploaddir = WWW . '/img/slides/';

        $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
            if (!empty($_FILES['img']['name'])){
                $img_name = $_FILES['img']['name'];
//                if($_FILES['img']['size'] > 512000){
//                    $_SESSION['size'] = "Картинка '" . $img_name . "' не добавлена. Размер не должен превышать 500 kb";
//                    continue;
//                }
//                if(!in_array($_FILES['img']['type'], $types)){
//                    $_SESSION['type'] = "Картинка '" . $img_name . "' не добавлена. Допустимые расширения - .gif, .jpg, .png";
//                    break;
//                }
                $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['img']['name'])); // расширение картинки
                $new_img_name = md5(time()).".$ext";
                $uploadfile = $uploaddir.$new_img_name;
                $image = \R::dispense('sliders');
                $image->img = $new_img_name;
                \R::store($image);
                move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
            }
    }

}