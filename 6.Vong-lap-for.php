<?php
    
    /* for loop */
    for ($i = 0; $i <= 10; $i++){
        echo $i . ' - ';
    }
    echo '<br>';

    /* for lồng */
    for ($i = 0; $i < 10; $i++){
        for($j = 9; $j >= $i; $j--){
            echo $j;
        }
        echo '<br>';
    }

    // /* infinity loop */
    // for ($i = 9, $count = 10; $i <= $count; $i--){
    //     echo $i . ' // ';
    // }
    
    /* for với mảng */
    $sinhvien = array('Nguyễn A', 'Nguyễn B', 'Nguyễn C', 'Nguyễn D', 'Nguyễn E', 'Nguyễn F');
    $count = count($sinhvien);
    for ($i = 0; $i < $count; $i++){
        echo $sinhvien[$i] . '<br>';
    }

?>


