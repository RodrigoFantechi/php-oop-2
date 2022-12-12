<?php

class Food extends Product{
    public $flavour;
    public function __construct($name, Category $category, $flavour) {
        $this->flavour = $flavour;
        parent::__construct($name, $category);
    }
}