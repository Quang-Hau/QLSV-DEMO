<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./fornt/fontawesome-free-6.4.2-web/css/all.min.css">
    <title>list of students</title>
</head>
<body>
    <div style="margin-top:50px;" class="container">
    
        <h1 class="container d-flex align-items-center justify-content-center" >List of student</h1>
            <table style="margin-top:25px;" class="table">
                <thead class="thead-dark">
                    <tr>
                        <th> id</th>
                        <th> student code</th>
                        <th> Firstname &Lastname</th>
                        <th> Class</th>
                        <th> Edit delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    // kết nối với sql
                    require_once 'connect.php';

                    //Câu lệnh SQL này là để truy vấn và sắp xếp dữ liệu trong bảng "student" theo thứ tự được chỉ định
                    $listed_sql = "SELECT * FROM student order by lop , hoTen";

                    //thực thi câu lệnh
                    $result = mysqli_query($conn , $listed_sql);


                    // quyệt qua các phần tử trả về từ dữ liệu result và in ra
                    while($row = mysqli_fetch_assoc($result )){   
                    ?>
                        <!-- echo $row['id'] . "-" .$row['maSv'] . "-" .$row['hoTen'] . "-" . $row['lop'] . "<br>"; -->
                        <tr>
                        <td style="border-bottom: 1px solid #ccc;" ><?php echo $row['id']; ?></td>
                        <td style="border-bottom: 1px solid #ccc;"><?php echo $row['maSv']; ?></td>
                        <td style="border-bottom: 1px solid #ccc;"><?php echo $row['hoTen']; ?></td>
                        <td style="border-bottom: 1px solid #ccc;"><?php echo $row['lop']; ?></td>
                        <td style="border-bottom: 1px solid #ccc;  text-align: center;">
                        <a style="margin-right:22px;" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a> 
                        <a id="delete" onclick = "return confirm('you want to delete this line ?'); "  style="color:red;" href="delete.php?id=<?php echo $row['id']; ?>" > <i class="fa-solid fa-delete-left"></i></a>
                        </td>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
    </div>
    <div class="d-flex align-items-center justify-content-center">
    <a href="add.html"   class="btn btn-primary">
                Go home
    </a>
    <button style=" margin-left:45%;"  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add student
    </button> 
    </div>
    <!-- Modal add student -->
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form add student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="hoten">First name last name</label>
                <input type="text" id="hoten" class="form-control" name="hoTen" placeholder="First name last name" required>
            </div>

            <div class="form-group">
                <label for="masv">Student code</label>
                <input type="text" id="masv" class="form-control" name="maSv"  placeholder="Student code" required>
            </div>

            <div class="form-group">
                <label for="lop">Class</label>
                <input type="text" id="lop" class="form-control" name="lop"  placeholder="Class" required>
            </div>

            <button type="submit" id="btn" class="btn btn-success">add student</button>
            </form>
            <button style="float: right" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

      <!-- Modal footer -->
      <div  class="modal-footer d-flex align-items-center justify-content-center">
      © 9.3.2023 Copyright - PHP
      </div>

    </div>
  </div>

</body>
</html>


