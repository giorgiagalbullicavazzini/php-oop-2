<?php

require_once __DIR__.'/Label.php';

class Animal extends Label {
    private $species;

    public function __construct(string $_species) {
        parent::__construct('Animali');
        $this -> species = $_species;
    }
}

$dog = new Animal('Cane');
$cat = new Animal('Gatto');
$bird = new Animal('Uccelli');
$fish = new Animal('Pesci');

?>