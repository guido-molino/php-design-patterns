<?php
namespace creational\factory\App\Types;

use creational\factory\App\AnimalInterface;

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
        return $this->bubbles;
    }
}