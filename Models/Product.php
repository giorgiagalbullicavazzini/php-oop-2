<?php

class Product {
    private $article_name;
    private $brand;
    private $category;
    private $full_price;
    private $discount;
    private $final_price;

    // Calculate final_price if a discount gets applied
    private function set_discount($full_price, $discount) {
        if ($discount !== 0) {
            $this -> final_price = ($full_price / 100 * $discount) + $full_price;
        } else {
            $this -> final_price = $full_price;
        }
    }

    public function __construct(string $_article_name, string $_brand, string $_category, float $_full_price, int $_discount = 0) {
        $this -> article_name = $_article_name;
        $this -> brand = $_brand;
        $this -> category = $_category;
        $this -> full_price = $_full_price;
        $this -> discount = $_discount;
        $this -> set_discount($_full_price, $_discount);
    }
}

$product = new Product('Cibo per cani', 'CaneFelice', 'Animali', 20.99);
var_dump($product);

?>