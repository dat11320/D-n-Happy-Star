<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /* MVC
    index.php: controller của website
    model: phương thức/ thư viện của website
    user : view của role user
    admin: view của admin + controller của admin
    img/img/css/js/ts : source chung của nguyên website
    */
    // include thư viện
    // include_once("connect.php");

    // // include view
    // if(isset($_GET["ctrl"]))
    //     $ctrl=$_GET["ctrl"];
    // else
    //     $ctrl ="";
    
    // if(isset($_GET["act"]))
    //     $ctrl=$_GET["act"];
    // else
    //     $act ="";
    
    // if($ctrl!="")
    //     include("./$ctrl/index.php");
    // else
    //     echo "Đây là trang dashboard";
    include_once("./connect.php");
    include_once("./model/loaisp.php");
    ?>
    <nav>
        <!-- menu ngang -->
        <ul>
            <li>
                <?php
                    // kết nối dữ liệu
                    // nhúng thư viện
                    $rows = getAllLoaiSP($db);
                    foreach($rows as $v)
                        echo "<li>$v[1]</li>";
                ?>
            </li>
        </ul>
    </nav>
    <header>

    </header>
    <article>
        <!-- nội dung chính -->

    </article>
    <aside>
        
    </aside>
    <footer>
        <!-- footer website -->
    </footer>
</body>
</html>