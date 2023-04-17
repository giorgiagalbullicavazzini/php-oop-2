<?php

require_once __DIR__.'/Label.php';

class Game extends Label {
    private $type;
    private $description;
    private $size;

    public function __construct(string $_type, string $_description, string $_size) {
        parent::__construct('Giocattoli');
        $this -> type = $_type;
        $this -> description = $_description;
        $this -> size = $_size;
    }
}

$ball = new Game('Palline', 'Rotola', '10cm x 10cm');
$peluche = new Game('Peluche', 'Rotola', '10cm x 10cm');

?>