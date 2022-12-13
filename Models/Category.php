<?php

class Category{
   public $name;

    public function __construct(string $name) {

        $this->setName($name);
    }

    public function setName($name)
    {
        try{
            if (strtoupper($name) == 'GATTO'){
                $this->name = 'Gatto <i class="fa-solid fa-cat"></i>';
            } else if(strtoupper($name) == 'CANE') {
                $this->name = 'Cane <i class="fa-solid fa-dog"></i>';
            } else{
                 throw new Exception('La parola non è Gatto ne Cane');
            }
        }catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
            }
    }


}