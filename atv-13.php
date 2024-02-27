<?php
    
    $array = array(
        array(5,22,1),
        array(2,7,3),
        array(1,10,4)
    );

    foreach($array as $key => $value){
        if(count($value) == count($array)){$resultado = 'é uma matriz simetrica';}
        else{
            $resultado = 'Não e uma matriz simetrica';
            break;};
    }echo $resultado;

?>