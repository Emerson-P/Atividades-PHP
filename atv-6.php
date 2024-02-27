<?php

    $lista = array(6,3,4,2,33,77,3,5,2,88,42,36,1,0,10);
    $soma = 0;
    foreach($lista as $key => $value){
        $soma +=  $value;
    }
    echo $soma / count($lista) ;

?>