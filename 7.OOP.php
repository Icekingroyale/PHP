<?php

class car {
    public $brand;
    public $model;
    public $color;

    public function __construct($brand, $model, $color ) {
        $this->brand = $brand; 
        $this->model = $model;
        $this->color = $color;       
    }

    public function buy() {
        echo "I want to buy a {$this->brand} with model {$this->model} painted in {$this->color}";
    }
}

$first_car = new car('Mercedes', 'GLE 450', 'Black'); 
$second_car = new car('Lexus','RX 350','gold');



echo $second_car->buy() ,'<br/>', $first_car->buy();
