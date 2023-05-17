<?php
class Animal 
{
    // properties
    public $name;
    public $age;
    public $color;
    public $weight; 

    // constructor
    function __construct($name, $age, $color, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
        $this->weight = $weight;

        $this->printInfo();
    }
    // method
    public function eat()
    {
        echo $this->name . ' is eating';
    }
    public function sleep()
    {
        return $this->name . 'is sleeping';
    }
    public function printInfo()
    {
        echo 'Name:' . $this->name . ' <br>';
        echo 'color:' . $this->color . ' <br>';
    }
}