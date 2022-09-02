<?php

class Bicycle {
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name() {
    return "This is a " . $this->weight_kg . " " . $this->description . " " . $this->year . " " . $this->brand . " " . $this->model . ".";
  }
  
  function weight_lbs () {
    return floatval($this->weight_kg) * 2.2046226218 . " lbs";
  }
  
  function set_weight_lbs($value) {
  $this->weight_kg = floatval($value) / 2.2046226218;
  }
}


$bike = new Bicycle;
$bike->brand = 'Toyota';
$bike->model = 'Corolla';
$bike->year = '2014';
$bike->description = 'Red';
$bike->weight_kg = "10";

echo $bike->name() . "<br>";
echo $bike->weight_kg . "<br>";
echo $bike->weight_lbs() . "<br>";

$bike->set_weight_lbs(5);
echo $bike->weight_kg . "<br>";
echo $bike->weight_lbs() . "<br>";
