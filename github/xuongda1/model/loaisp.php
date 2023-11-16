<?php
    // chứa function kết nối với bảng loáip
    function getAllLoaiSP($db){
        $sql="select * from loaisp";
        $result=$db->query($sql);// select * from..
        // lấy về
        $rows=$result->fetchAll();
        return $rows;
    }
    function insertLoaiSP($db,$ten){
        $sql =" insert into loaisp values(null,'$ten')";
            
        return $result=$db->exec($sql);
    }
    // function dd($id.){
    //     $sql = "delete from loaisp where maloai=$id";
    //     return $result = $db->exec($sql);
    // }
    function updateLoaiSP($db, $ma, $ten){
        $sql = "UPDATE `LoaiSP` SET `TenLoai` = '$ten'
            WHERE `LoaiSP`, `MaLoai` = $ma;";
        return $result = $db->exec($sql);
    }



?>