<?php
    //lấy id cần edit
    $id = $_GET['id'];

    // kêt nối sql

    require_once 'connect.php';

    // câu lệnh để lấy thông tin sinh viên có id = $id

    $edit_sql =" SELECT * FROM student WHERE id=$id";

    //kết quả trả về khi thực thi câu lệnh lấy thông tin sinh viên

    $result = mysqli_query($conn , $edit_sql);
    $row = mysqli_fetch_assoc($result);
    
?>
    <!-- hiễn thị thông tin lên form -->

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
    <title>edit students</title>
</head>
<body>
    <div style="margin-top:50px;" class="container">
        
        <h1 class="container d-flex align-items-center justify-content-center" >Update student</h1>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="form-group">
            <label for="hoten">First name last name</label>
            <input type="text" id="hoten" class="form-control" name="hoTen"  required value = "<?php echo $row['hoTen']?>">
        </div>

        <div class="form-group">
            <label for="masv">Student code</label>
            <input type="text" id="masv" class="form-control" name="maSv"   required value = "<?php echo $row['maSv']; ?>">
        </div>

        <div class="form-group">
            <label for="lop">Class</label>
            <input type="text" id="lop" class="form-control" name="lop"   required value = "<?php echo $row['lop']?>">
        </div>

        <button type="submit" id="btn" class="btn btn-success">Update student</button>
        <a href="listed.php" style="float: right;" type="submit"  class="btn btn-primary">
           Go Back
        </a>
        </form>
    </div>
    <script>
        const btn = document.querySelector('#btn');
        const hoten = document.querySelector('#hoten');
    
        btn.onclick = (e) => {
            alert('Are you sure you want to change?')
        }
    
    </script>
</body>
</html>
