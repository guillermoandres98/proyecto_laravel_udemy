<?php

    class Padre{

        public $nombre = "guillermo";

       public function getTextoPadre() {
            return "texto desde la clase padre";    
       }    
    }

    class Hija {

        public $hija;

        public function __construct()
        {
            $this->hija = new Padre();
        }
    }
    $h = new Hija();


    echo $h->hija->getTextoPadre();

?>
