<!-- sao khi edit ta tạo file update -->

<?php
    //nhận dữ liệu từ form
    $maSv = $_POST['maSv'];
    $ht = $_POST['hoTen'];
    $lop = $_POST['lop'];
    //id cần sửa từ form gữi lên nên t dùng $_POST vì ta đã lưu id cần sửa vào ô input và ẩn nó đi ở file edit.php
    $id = $_POST['id'];
    //kết nối sql
    require_once 'connect.php';

    //thêm dữ liệu vào database
    $update_sql = "UPDATE student SET maSv='$maSv', hoTen ='$ht', lop ='$lop' WHERE id=$id";

    //trả về một chuỗi vd:UPDATE student SET maSv='msv:11232', hoTen ='Nguyễn Lê Quang Hậu', lop ='DCT12' WHERE id=173
    // echo $update_sql; exit; // dùng để check trong cột sql trong myadmin xem caauu truy vấn thêm dữ liệu có đúng không

    //thực thi câu lệnh thêm

    mysqli_query( $conn ,  $update_sql);

    header('location: listed.php')
?>