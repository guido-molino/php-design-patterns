<?php
namespace creational\factory\Types;

use creational\factory\AnimalInterface;

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
