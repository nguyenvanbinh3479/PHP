<?php

    /* tìm kiêm tuyến tính */
    function kiem_tra($mang, $can_tim)
    {
        for ($i = 0; $i < count($mang); $i++)
        {
            if ($mang[$i] == $can_tim)
            {
                return true;
            }        
        }
        return false;
    }

    $mang = array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);

    $can_tim = 2;
    if (kiem_tra($mang, $can_tim))
    {
        echo 'Số ' . $can_tim . ' có nằm trong mảng <br>';
    }
    else
    {
        echo 'Số ' . $can_tim . ' không có nằm trong mảng <br>';
    }
    /* tìm vị trí số chia hết cho 3 */
    function tim_so_chia_het_cho_3($mang1)
    {
        foreach ($mang1 as $key => $val)
        {
            if ($val % 3 ==0)
            {
                echo 'số ' . $val . ' vị trí thứ ' . $key . '<br/>'; 
            }
        }
    }
    $mang1 = array();
    for ($i = 1; $i <= 100; $i++)
    {
        $mang1[$i] = $i;
    }
    tim_so_chia_het_cho_3($mang1);

?>