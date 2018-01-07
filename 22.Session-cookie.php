<?php

    /* đăng ký session */
    session_start();

    /* lưu trữ */
    // Nếu click vào nút Lưu Session
    if(isset($_POST['save-session']))
    {
        //lưu
        $_SESSION['name'] = $_POST['username'];
    }
    if(isset($_POST['destroy-session']))
    {
        // Xóa session name
        unset($_SESSION['name']);
        
        // Xóa hết session
        session_destroy();
    }

    /* lưu cookie */
    setcookie('username', 'binhnguyen', time() + 3600);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            // Hiển thị thông tin lưu trong Session
            // phải kiểm tra có tồn tại không trước khi hiển thị nó ra
            if(isset($_SESSION['name']))
            {
                echo 'tên đăng nhập là ' . $_SESSION['name'];
            }

            //lấy gí trị từ cookie
            if (isset($_COOKIE['username']))
            {
                echo $_COOKIE['username'];
            }

            //xóa kookie
            setcookie("username", "", time()-3600);
        ?>
    </h1> 
    <form method="POST" action="">
        <input type="text" name="username" value=""/> <br/>
        <input type="submit" name="save-session" value="Lưu Session"/>
        <input type="submit" name="destroy-session" value="xóa session">
    </form>   
</body>
</html>