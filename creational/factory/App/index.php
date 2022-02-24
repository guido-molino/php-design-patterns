<?php
require_once 'Animal.php';

$fish = new Animal();
$fish->type('fish');
echo "this animal is a " . $fish->getAnimalType() . " he does " . $fish->getAnimalSounds() . " and does he makes bubbles?? " . "<br>" . $fish->doesBubbles() . "<br>";


$bird = new Animal();
$bird->type('bird');
echo "this animal is a " . $bird->getAnimalType() . " and he does " . $bird->getAnimalSounds();