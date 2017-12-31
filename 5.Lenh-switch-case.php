<?php

    /* switch-case */
    $number = 5;
    switch($number){
        case 0:
            echo 'số không <br>';
            break;
        case 1: 
            echo 'số một <br>';
            break;
        case 2:
            echo 'số hai <br>';
            break;
        case 3:
            echo 'số ba <br>';
            break;
        case 4:
            echo 'số bốn <br>';
            break;
        default:
            echo 'không tìm thấy <br>';
            break;
    }

    $num = 12;
    $midle = null;
    switch($num){
        case 12:
            $midle = $num % 2;
            switch($midle){
                case 0:
                    echo 'số chẳn <br>';
                    break;
                default:
                    echo 'số lẻ <br>';
                    break;
            }
        break;
        default:
            break;
    }

?>