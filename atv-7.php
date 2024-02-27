<?php
    
    $array = array(
        array(5,22,1),
        array(2,7,3),
        array(1,10,4)
    );
    

    $trans = array();
    for($col = 0; $col <3;$col ++){
        for($linha = 0 ; $linha <3; $linha ++){

            $trans[$col][$linha] = $array[$linha][$col];

        }
    };
    foreach($trans as $kay => $value){
        echo '<br>';
        foreach($value as $key => $item){
            echo '+'.$item;
        }
    }
?>

