<?php

require_once __DIR__.'/Label.php';

class Food extends Label {
    private $type;
    private $weight;
    private $ingredients;

    public function __construct(string $_type, int $_weight, array $_ingredients) {
        parent::__construct('Cibo');
        $this -> type = $_type;
        $this -> weight = $_weight;
        $this -> ingredients = $_ingredients;
    }
}

$dry_food = new Food('Croccantini', 500, ['Manzo', 'Pollo', 'Verdure']);
$wet_food = new Food('Scatolette', 500, ['Manzo', 'Pollo']);
$feed = new Food('Mangime', 500, ['Manzo', 'Pollo']);

?>