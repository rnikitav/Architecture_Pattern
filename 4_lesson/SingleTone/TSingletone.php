<?php


trait TSingletone
{
    private static $items;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance(){
        if (isset(static::$items)){
            static::$items = new static();
        }
        return static::$items;
    }
}
