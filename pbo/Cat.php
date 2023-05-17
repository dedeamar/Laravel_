<?php
require_once 'Animal.php';

class Cat extends Animal
{
    // overide = mengganti
    function __construct($age, $weight)
    {
        $this->name = ' kucing';
        $this->color = ' white';

        $this->printInfo();
    }
    // overide
   public function jenis()
    {
    echo $this->name . ' Adalah Hewan yang paling lucu dan suka bermain';
   }
}

