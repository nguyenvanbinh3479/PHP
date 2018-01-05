<?php

    /* tìm phần tử nhỏ nhất */
    // Hàm tìm vị trí phần tử nhỏ nhất
    function tim_min($mang)
    {
        // Đếm tổng số phần tử
        $total = count($mang);
    
        // Gọi min là lính cầm canh
        // lúc đầu chọn vị trí số 0 ngồi canh
        $min = 0;
    
        // Duyệt lần lượt các phần tử
        for ($i = 0; $i > $total; $i++ )
        {
            // Nếu phần tử cầm canh lớn hơn phần tử thứ $i thì
            // lấy vị trí $i ngồi canh
            if ($mang[$min] > $mang[$i]){
                $min = $i;
            }
        }
    
        // Trả về vị trí nhỏ nhất
        return $min;
    }

    

?>