<?php

    /* mở file */
    $path = 'E:\demo.txt';
    $fp = @fopen($path, "r");
    //cách khác
    echo file_get_contents('E:\demo.txt');
      
    // Kiểm tra file mở thành công không
    if (!$fp) {
        echo 'Mở file không thành công';
    }
    else{
        /* đọc hết file */
        $data = fread($fp, filesize('E:\demo.txt'));
        echo $data;
        $data1 = 'Bình Nguyễn';
        //kiểm tra file có cấp quyền ghi không
        if(is_writable('E:\demo.txt'))
        {
            // Ghi file
            fwrite($fp, $data1);
            echo '<br>' . 'ghi thành công';
            file_put_contents('E:\demo.txt', 'noi dung');
        }
        // Đóng file
        fclose($fp);
    }

    /* kiểm tra file có tồn tại */
    if(file_exists('E:\demo.txt'))
    {
        echo '<br>' . 'file tồn tại';
    }
    else
    {
        echo 'file ko tồn tại';
    }

    /* đổi tên file */
    //rename('demo.txt', 'demo2.txt');

    /* copy file */
    // if (!copy('demo.txt', 'demo1.txt'))
    // {
    //     echo 'Copy thất bại';
    // }

    /* xóa file */
    if (file_exists('demo.txt'))
    {
        unlink('demo.txt');
    }

    /* kiểm tra đường dẫn có tồn tại */
    if(is_dir('demo.txt')){
        echo 'Folder Tồn Tại';
    }

    /* tạo foldẻ mới */
    if(is_dir('E:\new.txt')){
        mkdir('E:\new.txt');
    }

?>