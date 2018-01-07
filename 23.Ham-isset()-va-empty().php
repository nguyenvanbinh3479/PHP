<?php

    /* hàm isset */
    if (isset($domain)){
        echo 'Biến domain đã tồn tại';
    }
    else{
        echo 'Biến domain chưa tồn tại';
    }

    if (isset($_POST['submit']))
    {
        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    }

    $current_page = isset($_GET['page']) ? $_GET['page'] : '1';

    // Mệnh đề if này không được thực hiện
    // => biến $sologan ko tồn tại
    $website = 'freetuts.net';
    if ($website != 'freetuts.net'){
        $sologan = 'Đây không phải là website freetuts.net';
    }
    
    // Nên đoạn code này sai
    $sologan .= ' vui lòng ghi rõ nguồn khi public nội dung này ở website khác';

    /* hàm empty */
    if (empty($_POST['username'])){
        echo 'Bạn chưa nhập tên đăng nhập';
    }

?>