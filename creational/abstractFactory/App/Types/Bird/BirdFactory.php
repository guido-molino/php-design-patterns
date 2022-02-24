<?php

class BirdFactory implements AnimalFactoryInterface
{

    public function getName(): NameInterface
    {
        return new BirdName();
    }

    public function getRole(): RoleInterface
    {
        return new BirdRole();
    }
}