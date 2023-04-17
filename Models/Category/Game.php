<?php

require_once __DIR__.'/Label.php';

class Game extends Label {
    private $type;
    private $description = '';
    private $size = '';

    public function __construct(string $_type) {
        parent::__construct('Giocattoli');
        $this -> type = $_type;
    }

    // Set different specs
    public function setSpecs(string $_description, string $_size) {
        $this -> description = $_description;
        $this -> size = $_size;
    }
}

$ball = new Game('Palline');
$peluche = new Game('Peluche');

?>