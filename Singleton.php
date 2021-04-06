<?php


class Singleton
{
    private static $instance;

    protected function __construct()
    {
    }

    public static function getInstance(){
        if (!isset(self::$instance)){
            self::$instance = new static();
        }
        return self::$instance;
    }
}

$a = Singleton::getInstance();

$b = Singleton::getInstance();

var_dump($a === $b);