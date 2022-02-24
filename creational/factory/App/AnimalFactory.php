<?php
namespace creational\factory\App;

class AnimalFactory {

    protected $animal;

    public function get($type=null)
    {
        $namespace = 'creational\\factory\\Types\\';
        $class = $namespace . ucfirst($type);
        echo "hellow";
        require_once $class;
        return $this->animal = new $class();
    }
}
