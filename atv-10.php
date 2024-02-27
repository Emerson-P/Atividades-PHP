<?php

    $pri=0;
    $central=1;
    $prox=null;
    for($index = 0;$index <10; $index++){
        $prox = $central + $pri;
        $pri = $central;
        $central = $prox;

        echo '<br>'.$prox;
    }

?>