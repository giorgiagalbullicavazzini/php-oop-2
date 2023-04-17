<?php

require_once __DIR__.'/Label.php';

class Accessory extends Label {
    private $type;
    private $materials;
    private $size;

    public function __construct(string $_type, array $_materials, string $_size) {
        parent::__construct('Accessori');
        $this -> type = $_type;
        $this -> materials = $_materials;
        $this -> size = $_size;
    }
}

$collar = new Accessory('Collari', ['Legno', 'Stoffa'], 'Lunghezza 25cm');
$tag = new Accessory('Targhette', ['Legno', 'Stoffa'], 'Lunghezza 25cm');
$bowl = new Accessory('Ciotole', ['Legno', 'Stoffa'], 'Lunghezza 25cm');
$bed = new Accessory('Cucce', ['Legno', 'Stoffa'], 'Lunghezza 25cm');
$aquarium = new Accessory('Acquari', ['Legno', 'Stoffa'], 'Lunghezza 25cm');
$cage = new Accessory('Gabbie', ['Legno', 'Stoffa'], 'Lunghezza 25cm');

?>