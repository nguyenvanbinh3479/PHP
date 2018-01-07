<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method='POST' enctype='multipart/form-data'>
        <input type="file" name='file'>
        <input type="submit" name='uploadclick' value='upload'>
    </form>
    <?php
        //xử lý upload
        // Nếu người dùng click Upload\
        if(isset($_POST['uploadclick']))
        {
            // Nếu người dùng có chọn file để upload
            if($_FILES['file'])
            {
                // Nếu file upload không bị lỗi,
                // Tức là thuộc tính error > 0
                if($_FILES['file']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else
                {
                    // Upload file
                    move_uploaded_file($_FILES['file']['tmp_name'], 'E:\ '.$_FILES['file']['name']);
                    echo 'file update';
                }
            }
            else
            {
                echo 'Bạn chưa chọn file upload';
            }
        }
    ?>
</body>
</html>