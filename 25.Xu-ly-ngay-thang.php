<?php

    /* xử lý ngày tháng */
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    //xem danh sách time zone
    // $timezone = DateTimeZone::listIdentifiers();
    // foreach ($timezone as $item)
    // {
    //     echo $item . '<br>';
    // }
        
    /*định dạng ngày tháng */
    echo date('d/m/Y - H:i:s') . '<br>';

    /* nâng cao */

    //truyền chuỗi vào
    echo date('\B\â\y \g\i\ờ \l\à\ H \g\i\ờ') . "<br>";

    //chuyển sang kiểu int
    echo strtotime(date('Y-m-d H:i:s')) . "<br>";

    //định dạng ngày trong mysql
    date("Y-m-d H:i:s") . "<br>";

    //xử lý cộng trừ
    $dateint = mktime(0, 0, 0, 11, (20 + 12), 2016);
    echo date('d/m/Y', $dateint) . "<Br>"; // 02/12/2016
    

?>