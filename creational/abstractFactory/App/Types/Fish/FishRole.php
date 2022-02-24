<?php

class FishRole implements RoleInterface
{
    public function getAnimalRole(): string
    {
        echo "He swims";
    }
}