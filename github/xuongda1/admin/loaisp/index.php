<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $rows=getAllLoaiSP($db);
    ?>
    <table border=1>
        <tr>
            <td>Mã loại</td>
            <td>Tên loại</td>
            <td><a href="?ctrl=loaisp&act=add">Thêm</a></td>
        </tr>
        <?php
        foreach ($rows as $key => $v) {
            echo ("<tr>
            <td>$v[0]</td>
            <td>$v[1]</td>
            <td>
            <a href=?ctrl=loaisp&act=sửa>sửa</a>
            </td>
        </tr>");
        }
        ?>
        
    </table>
</body>
</html>