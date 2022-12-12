<?php

class Kennel extends Product{
    
    public $width;

    public function __construct($name, Category $category, $width) {
        $this->width = $width;
        parent::__construct($name, $category);
    }
}