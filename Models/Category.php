<?php

class Category{
    private $name;

    public function __construct(string $name) {
        $this->name = $name;

        if (strtoupper($name) == 'GATTO'){
            $this->name = 'miao';
        } else if(strtoupper($name) == 'CANE') {
            $this->name = 'bau';
        } else{
            die('error');
        }
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