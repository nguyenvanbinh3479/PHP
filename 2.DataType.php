<?php

    /* kiểu int */
    $tuoi = '15';

    /* ép dữ liệu kiểu int */
    $age = "98";
    $year = 100;
    $count = $age + $year;
    var_dump(is_int($age));//kiểm tra có phải kiểu int ko
    var_dump(is_int($count));
    $age = (int)$age;
    var_dump(is_int($age));

?>