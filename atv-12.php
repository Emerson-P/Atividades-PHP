<?php

    $lista = array('laranja','bife','leite','couve','mostarda','elefante');
    $maior = 0;
    foreach($lista as $key => $value){

        if(strlen($value) > $maior){
            $maior = strlen($value);
            $palavra = $value;
        }
    }
    echo $palavra;

?>