<?php
require __DIR__ . '/../Traits/Weightable.php';

class Product{
    public $name;
    private $price;
    use Weightable;
    public $category;
    public $image;
    
    public function __construct($name, Category $category,) {
        $this->name = $name;
        $this->category = $category;
    }
    public function set_price($price)
    {
        $this->price = $price;
    }
    public function get_price()
    {
        return $this->price;
    }
}