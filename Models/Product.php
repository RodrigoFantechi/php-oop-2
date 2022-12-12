<?php
require __DIR__ . '/../Traits/Weightable.php';

class Product{
    public $name;
    use Weightable;
    public $category;
    public $type;
    public $image;
    private $price;
    
    public function __construct($name, Category $category, Type $type, $image, $price) {
        $this->name = $name;
        $this->category = $category;
        $this->type = $type;
        $this->image = $image;
        $this->price = $price . ' euro';
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