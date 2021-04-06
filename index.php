<?php

class Transport
{
    public $model;
    public $price;

    public function __construct($model,$price)
    {
        $this -> model = $model;
        $this -> price = $price;
    }

    public function getInfo(){
        echo "Транспорт $this->model ,
         который стоит $this->price $";
    }

}

class Car extends Transport{

    public $maxSpeed;

    public function __construct($model, $price,$maxSpeed=null)
    {
        parent::__construct($model, $price);
        $this -> maxSpeed = $maxSpeed;
    }

    public function getInfo()
    {
        parent::getInfo();
        if (!is_null($this -> maxSpeed)){
            echo "Максимальная скорость $this->maxSpeed";
        }
    }
}
$car2 = new Car('BMW M8', 130000, 330);
$car2 ->getInfo();