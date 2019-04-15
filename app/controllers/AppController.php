<?php

namespace app\controllers;


use app\models\AppModel;
use ishop\App;
use ishop\base\Controller;
use ishop\Cache;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('pages', self::cachePages());
    }

   public static function cachePages()
    {
        $cache = Cache::instance();
        $pages = $cache->get('pages');
        if (!$pages){
            $pages = \R::getAssoc("SELECT * FROM pages");
            $cache->set('pages', $pages);
        }
        return $pages;
    }

}