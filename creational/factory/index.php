<?php
namespace creational\factory\index;
use creational\factory\Animal;

$animal = new Animal();
var_dump($animal->getAnimalSounds());

$animal->type('fish');
var_dump($animal->getAnimalSounds());
var_dump($animal->doesBubbles());

$animal->type('bird');
var_dump($animal->getAnimalSounds());
var_dump($animal->doesBubbles());