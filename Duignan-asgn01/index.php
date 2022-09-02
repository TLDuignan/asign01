<?php

class Bird {

  var $commonName;
  var $habitat;
  var $food;
  var $nestPlacement;
  var $cluchSize;
  var $conservationLevel;

  function birdSong() {
    return "commonName = " . $this->commonName . "<br>" . 
        "food = " . $this->food . "<br>" . 
        "nestPlacemnet = " . $this->nestPlacement . "<br>" .
        "clutchSize = " . $this->cluchSize . "<br>" .
        "conservationLevel = " . $this->conservationLevel . "<br>";
  }

  function set_birdSong($value) {
    $this->set_birdSong = ($value);
  }

}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food ='seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->cluchSize = '2 - 6 eggs';
$bird1->conservationLevel = 'Low';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food ='small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'fields and on the edges of woods, roadsides, and railroads';
$bird2->cluchSize = '3 -4  eggs';
$bird2->conservationLevel = 'Low';

echo $bird1->birdSong(); 
$bird1->set_birdSong("birdSong = drink-your-tea!" . "<br>" . "<br>");
echo $bird1->set_birdSong;

echo $bird2->birdSong(); 
$bird2->set_birdSong("birdSong = what! what!");
echo $bird2->set_birdSong;