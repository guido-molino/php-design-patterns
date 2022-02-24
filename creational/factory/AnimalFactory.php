<?php
namespace creational\factory;

class AnimalFactory {

    protected $animal;

    public function get($type=null)
    {
        $namespace = 'creational\\factory\\Types\\';
        $class = $namespace . ucfirst($type);
        return $this->animal = new $class();
    }
}
