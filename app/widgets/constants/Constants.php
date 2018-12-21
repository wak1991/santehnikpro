<?php

namespace app\widgets\constants;


class Constants
{
    protected $data;

    public function __construct($options = [])
    {
        $this->data = \R::getAssoc("SELECT * FROM {$this->table}");
    }

    protected function getOptions($options)
    {
        foreach ($options as $k => $v){
            if (property_exists($this, $k)){
                $this->$k = $v;
            }
        }
    }
}