<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form action="action.php" method="Post">
        <label>soa</label>
        <input type="text" name="hesoa">
        <label>sob</label>        
        <input type="text" name="hesob">
        <input type="submit">
    </form> -->

    <form action="action.php" method="POST">
        <label>họ tên</label>
        <input type="text" name='name'><br><br>
        <label>địa chỉ</label>
        <input type="text" name='dc'><br><br>
        <label>mã sv</label>
        <input type="text" name='masv'><br><br>
        <label style='margin-right: 50px;'>giới tính: </label>
        <label for="">male</label>
        <input type="radio" name='gioitinh' value="nam" checked>
        <label for="">female</label>
        <input type="radio" name='gioitinh' value="nữ"><br>
        <input type="submit">
    </form>
</body>
</html>