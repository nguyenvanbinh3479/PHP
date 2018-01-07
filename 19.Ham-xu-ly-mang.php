<?php

    /* chuyển chữ trong array thành thường hoặc hoa */
    $array = array('chu_thuong', 'Hello');
    $array1 = array(1,3); 
    $array = array_map('strtoupper', $array);
    var_dump($array);

    /* trộn 2 mảng */
    print_r(array_combine($array, $array1));
    echo '<br>';
    /* đếm phần tử giống nhau trong mảng */
    print_r(array_count_values($array));
    echo '<br>';
    /* thêm phần tử vào cuối mảng */
    array_push($array1, 5, 2, 6);
    print_r($array1);
    echo '<br>';

    /* thêm phần tử vào đầu mảng */
    array_unshift($array1, 5, 2, 6);
    print_r($array1);
    echo '<br>';

    /* xóa phần tử cuối mảng */
    array_pop($array1);
    print_r($array1);
    echo '<br>';

    /* kéo dãn mảng */
    $result = array_pad($array1, -5, 'heo');
    print_r($result);
    echo '<br>';

    /* xóa phần tử đầu tiên */
    array_shift($array1);
    print_r($array1);
    echo '<br>';

    /* kiểm tra có phải mảng không */
    $leo = is_array($array);
    var_dump($leo);

    /* kiểm tra giá trị có nằm trong mảng không */
    $haystackarray = array('hello', 'nobody');
    // Kết quả là true
    var_dump(in_array('nobody', $haystackarray));
    // Kết quả là false
    var_dump(in_array('net', $haystackarray));

    /* kiểm tra key có tồn tại trong mảng */
    $searcharray = array(
        'username' => 'thehalfheart',
        'email' => 'thehalfheart@gmail.com',
        'website' => 'freetuts.net'
    );
    // Trả về true
    var_dump(array_key_exists('username', $searcharray));
    // Trả về false
    var_dump(array_key_exists('otherkey', $searcharray));

?>