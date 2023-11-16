<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="">dashboard</a>
        <a href="?ctrl=loaisp">quản lý loại sp</a>
        <a href="">Quản lý sp</a>
        <a href="">Quản lý khách hàng</a>
    </nav>
    <?php
        // controller của admin
        // include thư viện : connect + model
        include_once("../connect.php");
        include_once("../model/loaisp.php");
        // nhúng file m à người ta cần vô
        if(isset($_GET["ctrl"])){
            $ctrl = $_GET["ctrl"];
        }else{
            $ctrl ="";
        }
        if ($ctrl!="") {
           include("./$ctrl/index.php");
        } else {
            echo("đây là trang dashboard");
        }
        
    ?>
</body>
</html>