<?php
require_once 'Tiger.php';
require_once 'Cat.php';
require_once 'Dog.php';

$cat = new Cat( 2, 5);
$cat ->jenis();
echo '<br>';
echo '<br>';

$dog = new Dog(3, 10);
$dog ->jenis();
echo '<br>';
echo '<br>';

$tiger = new Tiger(4, 150);
$tiger ->jenis();
echo '<br>';
echo '<br>';