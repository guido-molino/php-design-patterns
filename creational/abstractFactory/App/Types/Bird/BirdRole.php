<?php

class BirdRole implements RoleInterface
{
    public function getAnimalRole(): string
    {
        echo "He flies";
    }
}