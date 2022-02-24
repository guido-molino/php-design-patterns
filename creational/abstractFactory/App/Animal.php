<?php
namespace creational\abstracFactory\App;

class Animal
{
    public function get(\AnimalFactoryInterface $animalFactory)
    {
        $name = $animalFactory->getName();
        $role = $animalFactory->getRole();
        echo "This is $name , he $role";
    }
}