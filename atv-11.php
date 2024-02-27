<?php

    function Palin($palavra){
        if(strrev($palavra) == $palavra){
            echo 'A palavra é palindromo';
        }else{
            echo 'não é palindromo';
        }
    }
    Palin('arara');
?>