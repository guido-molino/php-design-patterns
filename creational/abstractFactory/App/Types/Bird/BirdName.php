<?php

class BirdName implements NameInterface
{
    protected array $names = ["Birdie", "Willy", "Wipi"];

    public function getAnimalName(): string
    {
        echo $this->names[array_rand($this->names, 1)];
    }
}