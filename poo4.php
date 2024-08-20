<?php

    abstract class Padre{

        public $nombre = "guillermo";

       public function getTextoPadre() {
            return "texto desde la clase padre";    
       }    
    }

    class Hija extends Padre{
        public function getTextoHija() {
            return $this->nombre;
        }
    }

    $hija = new Hija();
    echo $hija->getTextoHija();

?>
