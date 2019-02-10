<?php

namespace app\controllers\admin;


use ishop\Cache;

class CacheController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('Очистка кэша');
        $cache = Cache::instance();
        $cache->delete('santehnik_pro');
        $cache->delete('header');
        $cache->delete('footer');
        $cache->delete('menu');
        $cache->delete('menu2');
        $_SESSION['success'] = 'Кэш очищен';
    }
}