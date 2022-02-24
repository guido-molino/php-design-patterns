<?php

interface AnimalFactoryInterface
{
    public function getName(): NameInterface;

    public function getRole(): RoleInterface;
}