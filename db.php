<?php

require_once __DIR__.'/Models/Product.php';

// Food
$royal_canin = new Product('Royal Canin Mini Adult', 'Royal Canin', [$dog, $dry_food], 43.99);
$royal_canin -> categories[1] -> setSpecs(545, ['Prosciutto', 'Riso']);

$almo_nature_dog = new Product('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Almo Nature', [$dog, $dry_food], 44.99);
$almo_nature_dog -> categories[1] -> setSpecs(600, ['Manzo', 'Cereali']);

$almo_nature_cat = new Product('Almo Nature Cat Daily Lattina', 'Almo Nature', [$cat, $wet_food], 34.99);
$almo_nature_cat -> categories[1] -> setSpecs(400, ['Tonno', 'Pollo', 'Prosciutto']);

$guppy_feed = new Product('Mangime per Pesci Guppy in Fiocchi', 'Tetra', [$fish, $feed], 2.95);
$guppy_feed -> categories[1] -> setSpecs(30, ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']);

// Accessories
$wilma = new Product('Voliera Wilma in Legno', 'Wilma', [$bird, $cage], 184.99);
$wilma -> categories[1] -> setSpecs(['Legno'], 'M: L 83 x P 67 x H 153 cm');

$easy_crystal = new Product('Cartucce Filtranti per Filtro EasyCrystal', 'EasyCrystal', [$fish, $aquarium], 2.29);
$easy_crystal -> categories[1] -> setSpecs(['Materiale espanso'], 'ND');

// Games
$kong_classic = new Product('Kong Classic', 'Kong', [$dog, $ball], 13.49);
$kong_classic -> categories[1] -> setSpecs('Galleggia e rimbalza', '8,5 cm x 10 cm');

$trixie_mouse = new Product('Topini di peluche Trixie', 'Trixie', [$cat, $peluche], 4.99);
$trixie_mouse -> categories[1] -> setSpecs('Morbido con codina in corda', '8,5 cm x 10 cm');

?>