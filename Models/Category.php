<?php

class Category
{
    public $name;

    public function __construct(string $name)
    {
        try {
            if (strtoupper($name) == 'GATTO') {
                $this->name = 'Gatto <i class="fa-solid fa-cat"></i>';
            } else if (strtoupper($name) == 'CANE') {
                $this->name = 'Cane <i class="fa-solid fa-dog"></i>';
            }
        } catch (Exception $e) {
            echo 'la parola è diversa da gatto o cane';
        }
    }
}
