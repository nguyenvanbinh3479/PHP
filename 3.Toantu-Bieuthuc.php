<?php

    /* biểu thức gán */
    $a = $b = $c = $d = 12;

    /* biểu thức số học */
    $ketqua = $a + $b/2;
    $ketqua = $a / 7;
    $ketqua = $a + ($b = 5 + 6);
    echo $ketqua.'<br>';

    /* toán tử quan hệ */
    $t = ($a == 12); // Biến $t có giá trị là TRUE vì biểu thức (12 == 12) đúng
    $t = ($a > 12);  // Biến $t có giá trị là FALSE vì biểu thức (12 > 12) sai
    $t = ($a >= 12); // Biến $t có giá trị TRUE vief biểu thức (12 >= 12) đúng
    $t = ($a != 12); // Biến $t có giá trị FALSE vì biểu thức (12 != 12) sai

    /* toán tử luận lý */
    $ab = 100;
    $cd = 200;
    $tong = $ab + $cd;
    echo $tong.'<br>';
    $check = ($ab < $cd) && ($tong > 200);
    echo $check;

    //Độ ưu tiên theo thứ tự như sau: NOT -> AND -> OR, vd: ( 7 > 5 &&  !(-5 > 1) || 10 == 10 )

?>