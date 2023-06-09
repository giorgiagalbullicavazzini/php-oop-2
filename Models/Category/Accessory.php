<?php

require_once __DIR__.'/Label.php';

class Accessory extends Label {
    private $type;
    private $materials = [];
    private $size = '';

    public function __construct(string $_type) {
        parent::__construct('Accessori');
        $this -> type = $_type;
    }

    // Set different specs
    public function setSpecs(array $_materials, string $_size) {
        $this -> materials = $_materials;
        $this -> size = $_size;
    }
}

$collar = new Accessory('Collari');
$tag = new Accessory('Targhette');
$bowl = new Accessory('Ciotole');
$bed = new Accessory('Cucce');
$aquarium = new Accessory('Acquari');
$cage = new Accessory('Gabbie');

?>