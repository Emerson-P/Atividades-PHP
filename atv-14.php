<?php

    class calculadora {

        function Somar($num1,$num2){
            echo $num1 + $num2 . '<br>';
        }
        function Divisão($num1,$num2){
            echo $num1 / $num2 . '<br>';
        }
        function Subtração($num1,$num2){
            echo $num1 - $num2 . '<br>';
        }
        function Multiplição($num1,$num2){
            echo $num1 * $num2. '<br>';
        }
    }

    $conta = new calculadora();
    $conta->Somar(4,4);
    $conta->Divisão(8,2);
    $conta->Subtração(5,2);
    $conta->Multiplição(2,2);
?>