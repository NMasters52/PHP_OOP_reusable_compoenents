<?php 

class Car {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
    
    }

    public function getCarInfo(){
        return "{$this->make} {$this->model} {$this->year}";
    }

    public function __destruct() {
        echo "The {$this->year} {$this->model} is no longer available";
    }
}

?>