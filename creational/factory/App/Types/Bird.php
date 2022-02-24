<?php
namespace creational\factory\App\Types;

use creational\factory\App\AnimalInterface;

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
