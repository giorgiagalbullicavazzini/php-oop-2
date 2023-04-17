<?php

require_once __DIR__.'/Category/Store.php';

class Product {
    private $article_name;
    private $brand;
    public $categories;
    private $full_price;
    private $discount;
    private $final_price;

    // Calculate final_price if a discount gets applied
    private function set_discount($full_price, $discount) {
        if ($discount !== 0) {
            $this -> final_price = $full_price - ($full_price / 100 * $discount);
        } else {
            $this -> final_price = $full_price;
        }
    }

    public function __construct(string $_article_name, string $_brand, array $_categories, float $_full_price, int $_discount = 0) {
        $this -> article_name = $_article_name;
        $this -> brand = $_brand;
        $this -> categories = $_categories;
        $this -> full_price = $_full_price;
        $this -> discount = $_discount;
        $this -> set_discount($_full_price, $_discount);
    }
}

?>