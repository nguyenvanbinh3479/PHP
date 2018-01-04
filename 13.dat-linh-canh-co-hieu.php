<?php

    /* lính canh */
    function tim_max($a, $b, $c)
    {
        $max = $a;
        if ($max < $b){
            $max = $b;
        }
        if ($max < $c){
            $max = $c;
        }
        return $max;
    }
    /* cờ hiệu */
    $flag = false;
  
    // duyệt qua từng số
    for ($i = 1; $i <= 1000; $i++){
        if ($i % 40 == 0){
            $flag = true;
        }
    }
    
    if ($flag == true){
        echo 'Có';
    }
    else {
        echo 'Không';
    }

?>