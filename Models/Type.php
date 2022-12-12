<?php
class Type{
    public $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function get_name_type()
    {
        return $this->name;
    }
    public function set_name_type($name)
    {
        $this-> name = $name;
    }
}