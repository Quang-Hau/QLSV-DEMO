<?php
    //nhận dữ liệu từ form
    $maSv = $_POST['maSv'];
    $ht = $_POST['hoTen'];
    $lop = $_POST['lop'];

    //kết nối sql
    require_once 'connect.php';

    //thêm dữ liệu vào database
    $add_sql = "INSERT INTO student (maSv, hoTen, lop) VALUES ('$maSv','$ht','$lop')";

    // echo $add_sql; exit;

    //thực thi câu lệnh thêm

    mysqli_query( $conn , $add_sql);

    header('location: listed.php')
?>