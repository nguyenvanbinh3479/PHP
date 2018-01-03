<?php

    /* while */
    $i = 0; 
    while ($i <= 10){
        echo $i . '__';
        $i++;
    } 
    $k = 0;
    $j = 10;
    while($k <100 && $j >5){
        $k++;
        $j -= 2;
        echo '<br> k = ' . $k;
        echo '<br> j = ' . $j;
    } 
    echo '<br>';

    /* do-while */
    $l = 100;
    do {
        echo '__' . $l;
        $l++;
    } 
    while ($l <= 130);
    echo '<br>';

    /* while-do-while */
    $m = 1;
    while ($m < 10)
    {
        $n = $m;
        while ($n < 10)
        {
            echo $n;
            $n++;
        }
        echo '<br>';
        $m++;
    }

    /* while-do-while-array */
    $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995,
    );
    $i = 0;
    do{
        echo $nam[$i] . '<br>';
        $i++;
    }
    while($i <= 5);

?>