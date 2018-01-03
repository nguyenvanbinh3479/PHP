<?php

    /* cấu trúc function */
    $number = 12;
    if (kiem_tra_so_chan($number)){
        echo 'Số chẵn <br>';
    }
    else{
        echo 'Số lẽ <br>';
    }
    function kiem_tra_so_chan($number){
        if($number % 2 ==0)
            return true;
        else
            return false;
    }
    /* nhiều biến */
    $s1 = 12;
    $s2  = 13;
    echo tinhtong($s1, $s1) . '<br>';
    function tinhtong($a, $b, $c = false){
        $tong = $a + $b;
        if ($c != false){
            $tong = $tong +$c;
        }
        return $tong;
    }
    /* tham số thực và tham số hình thức */
    //tham số thực
    $so = 12;
    $flag = kiem_tra_so_nguyen_to($so);
    function kiem_tra_so_nguyen_to($number){
        //tham số hình thức
    }

    /* biến toàn cục và biến cục bộ */
    $bien_toan_cuc = 12;
    function kiem_tra()
    {
        $bien_cuc_bo = 13;
        // Lấy biến toàn cục
        global $bien_toan_cuc;
        if ($bien_cuc_bo % $bien_toan_cuc){
            return true;
        }
        else{
            return false;
        }
    }

    /* biến tĩnh */
    function kiem_tra1()
    {
        //biến tĩnh
        static $a = 0;
        $a++;
        echo $a . '<br>';
    }

    kiem_tra1();
    kiem_tra1();

    /* truyền bằng tham chiếu */
    // Biến
    $a = 1;
    
    // Hàm tăng giá trị tham số truyền vào lên 1
    function tang_len_1(&$a)//tham chiếu
    {
        $a = $a + 1;
        return $a; 
    }
    
    // Xuất giá trị trả về của hàm
    echo tang_len_1($a);
    
    // Xuất giá trị của biến
    echo $a . '<br>';

    /* hàm gọi hàm */
    // Danh sách các hàm
    function A()
    {
        B();
    }
    
    function B()
    {
        C();
    }
    
    function C()
    {
        echo 'C';
    }
    
    // Chương trình chính gọi đến hàm A
    A(); // Kết quả xuất ra màn hình là 'C'

?>