<?php

class Category{
    private $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function set_name($name)
    {
        $this-> name = $name;
    }
}