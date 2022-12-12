<?php

class Toy extends Product{
  public $brend;

  public function __construct($name, Category $category, $brend) {
    $this->brend = $brend;
    parent::__construct($name, $category);
  } 
    
}