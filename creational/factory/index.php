<?php

class Animal
{
    protected $sounds;
    protected $bubbles;
    protected $type;
    protected $animal;

    public function __construct()
    {
        $this->animal = new AnimalFactory();
    }

    public function type($type = null)
    {
        $animal = $this->animal->get($type);
        $this->type = $animal->getType();
        $this->sounds = $animal->getSounds();
        $this->bubbles = $animal->doesBubbles();
    }

    public function getAnimalSounds()
    {
        return $this->sounds;
    }

    public function doesBubbles()
    {
        return $this->bubbles;
    }

    public function getAnimalType()
    {
        return $this->type;
    }
}

class AnimalFactory {

    protected $animal;

    public function get($type=null)
    {
        if($type == 'fish')
            return new Fish();
        if($type == 'bird')
            return new Bird();

        return "so what?";
    }
}

interface AnimalInterface {
    function getType();

    function getSounds();

    function doesBubbles();
}

class Fish implements AnimalInterface {
    protected $type = 'fish';
    protected $sounds = 'blwblw';
    protected $bubbles = true;

    public function getType()
    {
        return $this->type;
    }

    public function getSounds()
    {
        return $this->sounds;
    }

    public function doesBubbles()
    {
        return $this->bubbles === true ? "Yes!" : "Nope!";
    }
}

class Bird implements AnimalInterface {
    protected $type = 'bird';
    protected $sounds = 'cokoo';
    protected $bubbles = false;

    public function getType()
    {
        return $this->type;
    }

    public function getSounds()
    {
        return $this->sounds;
    }

    public function doesBubbles()
    {
        return $this->bubbles;
    }
}

$fish = new Animal();
$fish->type('fish');
echo "this animal is a " . $fish->getAnimalType() . " he does " . $fish->getAnimalSounds() . " and does he makes bubbles?? " . "<br>" . $fish->doesBubbles() . "<br>";


$bird = new Animal();
$bird->type('bird');
echo "this animal is a " . $bird->getAnimalType() . " and he does " . $bird->getAnimalSounds();