<?php

trait Weightable{
    protected $weight;

    public function get_weight()
    {
        return $this->weight;
    }

    public function set_weigth($weight , $unit)
    {
        $this->weight = $weight . $unit;
    }
}