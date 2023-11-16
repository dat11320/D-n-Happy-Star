<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST["btnSubmit"])){
            $ten = $_POST["txtTen"];
            $result = insertLoaiSP($db,$ten);
            if($result)
                header("lacation:?ctrl=loaisp");
            else
                echo("chúc bạn may mắn lần sau");
        }
    ?>
    <form action="" method="post">
        tên loại: <input type="text" name="txtTen">
        <input type="submit" name="btnSubmit" value="Thêm">
    </form>
</body>
</html>