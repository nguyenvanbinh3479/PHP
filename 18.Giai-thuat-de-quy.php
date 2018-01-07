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
    echo tinhtong2(100) . '<br>';

    /* đệ quy nhị phân */
    // Hàm tính giá trị của phần tử thứ $n của dãy Fibonacci
    // function Fibo($n)
    // {
    //     if ($n <= 2){
    //         return 1;
    //     }
    //     else {
    //         return (Fibo($n - 2) + Fibo($n - 1));
    //     }
    // }
    
    // // Truyền 100 vào để test
    // echo Fibo(100);

    /* đệ quy phi tuyến */
    // Tính phần tử thứ 8 của dãy
    function pheptinh($n4)
    {
        // Neeus $n < 6 thì trả về chính nó
        if ($n4 < 6){
            return $n4;
        }
        else{
            // Ngược lại tính tổng từ 1 tới $n - 1, và mỗi phần tử lại gọi làm hàm chính nó
            $tong4 = 0;
            for ($i4 = 1; $i4 < $n4; $i4++){
                $tong4 += pheptinh($n4 - $i4);
            }
            return $tong4;
        }
    }
    
    echo pheptinh(6) . '<br>';

    /* đệ quy hổ tương*/
    // Hàm đệ quy U
    function U($n5)
    {
        if ($n5 < 5){ // điều kiện dừng
            return $n5;
        }
        else{
            return U($n5 - 1) + G($n5 - 2);
        }
    }
    
    // Hàm đệ quy G
    function G($n5)
    {
        if ($n5 <= 8){ // điều kiện dừng
            return $n5 - 3;
        }
        else{
            return U($n5 - 1) + G($n5 - 2);
        }
    }
    
    // Gọi Hàm
    
    echo G(12);

?>