<?php
require_once 'Animal.php';

class Tiger extends Animal
{
    // overide = mengganti
    function __construct($age, $weight)
    {
        $this->name = 'Harimau';
        $this->color = 'orange';

        $this->printInfo();
    }
    // overide
    public function jenis()
    {
        echo $this->name . 'Hewan ini adalah Harimau jenis karnivora';
    }
}