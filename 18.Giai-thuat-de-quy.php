<?php

    /* đệ quy tuyến tính */
    //tính tổng số từ 1-100
    function tinhtong($n)
    {
        $tong = 0;
        for ($i = 0; $i <= $n; $i++)
        {
            $tong += $i;
        }
        return $tong;
    }
    echo tinhtong(100);

    function tinhtong2($n2)
    {
        if ($n2 == 1)
        {
            return $n2;
        }
        return $n2 + tinhtong2($n2 - 1);
    }
    echo tinhtong2(100);

    /* đệ quy tuyến tính */
    //tính giá trị của phần tử thứ $n của dãy Fibonacci
    // function fibo($n3)
    // {
    //     if ($n3 <= 2)
    //     {
    //         return 1;
    //     }
    //     else
    //     {
    //         return (fibo($n3 - 2) + fibo($n3 -1));
    //     }
    // }
    // echo fibo(100);

    /* đệ quy phi tuyến */
    // Tính phần tử thứ 8 của dãy
    // function pheptinh($n4)
    // {
    //     //nếu n<6 thì trả về chính nó
    //     if ($n4 <6)
    //     {
    //         return $n4;
    //     }
    //     else
    //     {
    //         // Ngược lại tính tổng từ 1 tới $n - 1, và mỗi phần tử lại gọi làm hàm chính nó
    //         $tong2 = 0; 
    //         for ($i2 = 1; $i2 = $n4; $i2++)
    //         {
    //             $tong2 += pheptinh($n4 - $i2); 
    //         }
    //         return $tong2;
    //     }
    // }
    // echo pheptinh(6);

?>