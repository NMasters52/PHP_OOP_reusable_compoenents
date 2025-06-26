<?php 

class Car {
    public $make = "Toyota" ;
    public $model = "Supra";
    public $year = "2024";

    public function getCarInfo(){
        return " {$this->make} {$this->model} {$this->year}";
    }
}

?>