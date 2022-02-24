<?php
namespace creational\factory;

class Animal {
    protected $sounds = array();
    protected $bubbles = array();
    protected $animal;

    public function __construct()
    {
        $this->animal = new AnimalFactory();
    }

    public function type($type=null)
    {
        $animal = $this->animal->get($type);
        $this->sounds[]=$animal->getSounds();
        $this->bubbles[]=$animal->doesBubbles();
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