<?php

    /* kiểu int */
    $tuoi = '15';

    /* ép kiểu int */
    $age = "98";
    $year = 100;
    $count = $age + $year;
    var_dump(is_int($age));//kiểm tra có phải kiểu int ko
    var_dump(is_int($count));
    $age = (int)$age;
    var_dump(is_int($age));

    /* kiểu boolean */
    $is_admin = true;

    /* ép kiểu boolean */
    $bool = 1;
    var_dump(is_bool($bool));
    $bool = (bool)$bool;
    var_dump(is_bool($bool));

    /* kiểu số thực */
    $a =  1.234;

    /* ép kiểu số thức */
    $b = 123;
    var_dump(is_float($b));
    $b = (float)$b;
    var_dump(is_float($b));

    /* kiểu chuỗi */
    $c = 'hello world';
    echo $c;

    /* ép kiểu chuỗi */
    $d = 123;
    var_dump(is_string($d));
    $d = (string)$d;
    var_dump(is_string($d));    

    /* kiểu mảng */
    $ten_mang = array('John', 'Smith', 'Jack', 'Cody');//1 chiều
    var_dump($ten_mang);
    print_r($ten_mang);
    echo '<br>';
    echo $ten_mang[2];
    echo '<br>';
    
    $e = array();//nhiều chiều
    $e[0][1] = 123;
    $e[0][2] = 321;
    echo $e[0][1]; // in ra giá trị 123
    echo $e[0][2]; // in ra giá trị 321
    
    /* kiểm tra mảng */
    var_dump(is_array($e));

?>