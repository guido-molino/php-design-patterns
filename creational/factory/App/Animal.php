<?php
namespace creational\factory\App;
require_once "AnimalFactory.php";

class Animal {
    protected $sounds;
    protected $type;
    protected $bubbles;
    protected $animal;

    public function __construct()
    {
        $this->animal = new AnimalFactory();
    }

    public function type($type=null)
    {
        $animal = $this->animal->get($type);
        $this->sounds=$animal->getSounds();
        $this->bubbles=$animal->doesBubbles();
    }

    public function getAnimalType()
    {
        return $this->type;
    }

    public function getAnimalSounds()
    {
        return $this->sounds;
    }

    public function doesBubbles()
    {
        return $this->bubbles;
    }
}