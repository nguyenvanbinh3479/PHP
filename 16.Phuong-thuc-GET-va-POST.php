<?php


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
    <form method="POST">
        <input type="text" name="id" value="">
        <input type="text" name="title" value="">
        <input type="submit">
    </form>
    <form method="POST">
            Username: <input type="text" name="username" value=""/> <br/>
            password: <input type="password" name="password" value=""/><br/>
            <input type="submit" name="form_click" value="Gửi Dữ Liệu"/>
        </form>
        <?php            
            // Lấy ID
            $id = $_POST['id'];
            echo $id; 
            
            // Lấy title
            $title = $_POST['title'];
            echo $title;
            
                // Nếu người dùng click vào button Gửi Dữ Liệu
                // Vì button đó tên là form_click nên đó cũng là
                // tên của key nằm trong biến $_POST
                if (isset($_POST['form_click'])){
                    echo 'Tên đăng nhập là: ' . $_POST['username'];
                    echo '<br/>';
                    echo 'Mật khẩu là: ' . $_POST['password'];
                }
           ?>
</body>
</html>