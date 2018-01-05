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
    /* sắp xếp tăng dần */
    function SelectSortAscending($mang)
    {
        //đếm tổng phần tử mảng
        $sophantu = count($mang);
        //lặp để sắp xếp
        for ($i = 0; $i < $sophantu - 1; $i++)
        {
            //tìm phần tử nhỏ nhất
            $min = $i;
            for ($j = $i + 1; $j <$sophantu; $j++)
            {
                if ($mang[$j] < $mang[$min])
                {
                    $min = $j;
                }
            }
            // Sau khi có vị trí nhỏ nhất thì hoán vị
            // với vị trí thứ $i
            $temp = $mang[$i];
            $mang[$i] = $mang[$min];
            $mang[$min] = $temp; 
        }
        //trả về mảng sắp xếp
        return $mang;
    }

?>