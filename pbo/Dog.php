<?php
require_once 'Animal.php';

class Dog extends Animal
{
    // override = mengganti
    function __construct($age, $weight)
    {
        $this->name = 'Anjing';
        $this->color = 'black';

        $this->printInfo();
    }
    // overide
    public function jenis()
    {
    echo $this->name . ' adalah hewan paling setia';
   }
}