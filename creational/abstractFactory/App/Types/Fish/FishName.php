<?php

class FishName implements NameInterface
{
    protected array $names = ["Fishy", "Nemo", "Bobino"];

    public function getAnimalName(): string
    {
        echo $this->names[array_rand($this->names, 1)];
    }
}