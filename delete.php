<?php
    // lấy dữ liệu id cần xóa
    $id = $_GET['id'];

    //kết nối sql 
    require_once 'connect.php';

    //câu lệnh xóa sql
    $delete_sql =" DELETE FROM student WHERE id=$id";

    //thực thi câu lệnh

    mysqli_query($conn ,$delete_sql);
    header('location: listed.php');
     
    
?>

