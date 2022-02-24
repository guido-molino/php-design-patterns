<?php

class FishFactory implements AnimalFactoryInterface
{

    public function getName(): NameInterface
    {
        return new FishName();
    }

    public function getRole(): RoleInterface
    {
        return new FishRole();
    }
}