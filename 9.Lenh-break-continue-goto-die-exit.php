<?php

    /* break */
    for ($i = 1; $i <= 100; $i++){
        echo $i . ' ';
        if($i == 50){
            break;
        }
    }
    echo '<br>';

    /* continue */
    for ($j = 1; $j <= 10; $j++){
        if($j == 5){
            continue;
        }
        echo $j . ' ';
    }
    echo '<br>';

    /* goto */
    $a = 12;
    $b = 13;
    $c = $a + $b;
    echo $a;
    goto end;
    echo $b;
    end:

    /* die-exit */
    echo '123';
    die();
    echo '456';

?>