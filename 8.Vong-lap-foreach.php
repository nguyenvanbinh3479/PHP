<?php

    /* foreach */
    $nam = array(
        1990,
        1991,
        1992,
        1993,
        1994,
        1995
    );
    foreach ($nam as $key => $value){
        echo $key . ' => ' . $value . '<br>';
    }

    $sinhvien = array(
        'SV001' => 'Nguyễn Văn A',
        'SV002' => 'Nguyễn Văn B',
        'SV003' => 'Nguyễn Văn C',
        'SV004' => 'Nguyễn Văn D',
        'SV005' => 'Nguyễn Văn E'
    );
      
    // Xuất ra danh sách sinh viên
    foreach ($sinhvien as $key => $tensv){
        echo $key . ' => ' . $tensv . '<br/>';
    }

?>