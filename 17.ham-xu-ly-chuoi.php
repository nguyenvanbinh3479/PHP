<?php

    //Nếu chuỗi được đặt trong dấu nháy kép "" thì các ký tự nháy kép " bên trong chuỗi phải thêm dấu gạch chéo đằng trước nó.
    echo "Nam nói\"Cậu ấy đang ăn tối\" <br>" ;
    //Nếu chuối được đặt trong dấu nháy kép thì trong chuỗi ta có thể truyền biến vào mà không cần dùng phép nối chuỗi.
    $str = "đang ăn tối";
    echo "Nam nói\"Cậu ấy $str\" <br>";  

    // a..zA..Z là gồm các từ từ a => z và A => Z
    $str = '\h\e\l\l\o\.\n\e\t\ hello.NET';
    $arr = array('helo ', ' there');
    //thêm các ký tự \ trong chuỗi $str.
    echo (addcslashes($str, 'a..zA..Z') . '<br>');
    //xóa các ký tự \ trong chuỗi $str.
    echo stripslashes($str) . '<br>';
    // chuyển chuỗi $str thành một dãy số nguyên
    echo crc32($str) . '<br>';
    //chuyển một chuỗi $string thành một mảng các phần tử
    var_dump(explode(' ', $str)). '<br>';
    //mảng $piecesarray thành chuỗi
    echo implode(' ', $arr). '<br>';
    //trả về mã ASCII
    echo ord ('bình'). '<br>';
    //đếm số ký tự của chuỗi $string.
    echo strlen($str) . '<br>';
    //trả về số từ trong chuỗi $str.
    echo str_word_count('hello there') . '<br>';
    // lặp chuỗi $str $n lần.
    echo str_repeat('hello ', 10) . '<br>';
    //tìm kiếm và thay thế chuỗi.
    echo str_replace('hello', 'bình', $str) . '<br>';
    echo str_replace(array('\h\e\l\l\o\.', '\n\e\t\ '), array('binh', 'nguyen'), $str) . '<br>';
    //mã hóa chuỗi thành một dãy 32 ký tự
    echo md5('Bình Nguyễn') . '<br>';
    //mã hóa chuỗi thành một dãy 40 ký tự 
    echo sha1('binhnguyen') . '<br>'; 
    //chuyển ngược các ký tự dạng thực thể HTML sang dạng ký tự của chúng
    $str = htmlentities('<b>freetuts.net</b>');
    echo 'Entity: ' . $str . '<br/>';
    echo 'Decode: ' . html_entity_decode($str);
    //bỏ các thẻ html trong chuỗi $string được khai báo
    echo strip_tags('<b>freetuts.net</b>', 'b') . '<br>';
    //lấy một chuỗi con nằm trong chuỗi $str
    echo substr( 'binhnguyen',  0, 4) . '<br>';
    //Tách một chuỗi bắt đầu từ  $ky_tu_cho_truoc
    echo strstr('binh Xin Chào', 'Xin') . '<br>';
    //Xóa ký tự $ky_tu nằm ở đầu và cuối chuỗi $str,
    echo trim('binhbanbunvb', 'b');
?>