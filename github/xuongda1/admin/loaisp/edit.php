<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ma = "";
        if (isset($_GET["id"])) {
            $ma = $_GET["id"];
            $sql = "select *from loaisp where maloai=$ma";
            $db->query($sql);
            
            }
        if(isset($_POST["btnSubmit"])){
            $ma = $_POST["txxtMa"];
            $ten = $_POST["txtTen"];
            $_sql = "update loaisp set tenloai ='$ten'where maloai=$ma";
            $result = $db->exec($sql);
            if($result){
                header("location:?ctrl=loaisp");
            }else{
                echo"Chúc bạn mai mắn lần sau";
            }
        }
    ?>
    <form action="" method="post">
        mã loại: <input type="text" name="txtMa" readonly><br>
        tên loại: <input type="text" name="txtTen">
        <input type="submit" name="btnSubmit" value="Thêm">
    </form>
</body>
</html>