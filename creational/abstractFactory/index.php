<?php
namespace creational\abstractFactory\App;

use creational\abstracFactory\App\Animal;
use FishFactory;
use BirdFactory;

$animal = new Animal();
$animal->get(new BirdFactory());
// This is Willy, he flies
$animal->get(new FishFactory());
// This is Nemo, he swims