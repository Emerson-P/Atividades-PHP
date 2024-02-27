<?php
    
    class Circulo {

        public $raio;

        function __construct($raio){
            $this->raio= $raio;
        }

        function getRaio(){
            echo 3.14*$this->raio**2;
        }
    }

    $circo = new Circulo(8);
    $circo->getRaio();
?>