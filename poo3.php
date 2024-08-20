<?php
    //sin abstract no da error xD
    //se utiliza con herencia
    abstract class Abstracta{

        public $nombre ="Guillermo";
        
    }

    $p = new Abstracta();
    echo $p->nombre;	

?>
