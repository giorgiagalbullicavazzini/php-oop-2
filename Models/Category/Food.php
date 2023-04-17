<?php

require_once __DIR__.'/Label.php';

class Food extends Label {
    private $type;
    private $weight = 0;
    private $ingredients = [];

    public function __construct(string $_type) {
        parent::__construct('Cibo');
        $this -> type = $_type;
    }

    // Set different specs
    public function setSpecs(int $_weight, array $_ingredients) {
        $this -> weight = $_weight;
        $this -> ingredients = $_ingredients;
    }
}

$dry_food = new Food('Croccantini');
$wet_food = new Food('Scatolette');
$feed = new Food('Mangime');

?>