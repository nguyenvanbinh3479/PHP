<?php

    /* if */
    $so_can_kiem_tra = 12;
    $sodu = $so_can_kiem_tra % 2;
    if($sodu == 0){
        echo $so_can_kiem_tra.' là số chẵn <br>';
    }

    $nam = 1990;
    $kiemtra = ($nam % 4 == 0 || $nam % 400 == 0);
    if($kiemtra % 100 != 0){
        echo $nam.' là năm nhuận <br>';
    }
    else{
        echo $nam.' không phải Là năm nhuận <br>';
    }

    $mau = 'yellow';
    if($mau == 'xanh' || $mau == 'blue'){
        echo 'đây là màu xanh <br>';
    }
    else if($mau == 'đỏ' || $mau == 'red'){
        echo 'đây là màu đỏ <br>';
    }
    else if($mau == 'vàng' || $mau == 'yellow'){
        echo 'đây là màu vàng <br>';
    } 
    else{
        echo 'các màu khác <br>';
    }
    


?>