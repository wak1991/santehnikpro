<?php

namespace app\models;

use ishop\App;

class Breadcrumbs
{

    public static function getBreadcrumbs($parent_id, $name = '')
    {
        $pages = App::$app->getProperty('pages');
        $breadcrumbs_array = self::getParts($pages, $parent_id);
        $breadcrumbs = "<i class='fa fa-home'></i> <a href='" . PATH . "'>Главная</a>";
        if ($breadcrumbs_array){
            foreach ($breadcrumbs_array as $alias => $title){
                $breadcrumbs .= "<i class='fa fa-angle-right'></i> <span><a href='" . PATH . "/page/{$alias}'>{$title}</span></a>";
            }
        }
        if ($name){
            $breadcrumbs .= "<i class='fa fa-angle-right'></i> $name";
        }
        return $breadcrumbs;
    }

    public static function getParts($pages, $id)
    {
        if (!$id) return false;
        $bredcrumbs = [];
        foreach ($pages as $k => $v){
            if (isset($pages[$id])){
                $bredcrumbs[$pages[$id]['alias']] = $pages[$id]['title'];
                $id = $pages[$id]['parent_id'];
            }else break;
        }
        return array_reverse($bredcrumbs, true);
    }

}