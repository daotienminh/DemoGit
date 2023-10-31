<?php 
$masv = $_GET['sid'];
require_once 'connect.php';
$sua1_sql = "SELECT * FROM sinhvien WHERE masv = $masv";
$result = mysqli_query($conn, $sua1_sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua sinh vien</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 style="color:brown">Sửa sinh viên</h1>
        <form action="update1.php" method="post">
            <div class="form-group">
                <label for="masv">Ma sinh vien</label>
                <input type="text" class="form-control" name="masv" id="masv" 
                value ="<?php echo $row['masv']?>">
            </div>
            <div class="form-group">
                <label for="hoten">Ho va ten</label>
                <input type="text" class="form-control" name="hoten" id="hoten" value = "<?php echo $row['hoten']?>">
            </div>
            <div class="form-group">
                <label for="ngaysinh">Ngay sinh</label>
                <input type="date" class="form-control" name="ngaysinh" id="ngaysinh" value = "<?php echo $row['ngaysinh']?>">
            </div>
            <div class="form-group">
                <label for="GioiTinh">Giới tính:</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="GioiTinh" id="1" value="1" class="form-check-input" checked>
                        <label for="1" class="form-check-label">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" name="GioiTinh" id="0" value="0" class="form-check-input">
                        <label for="0" class="form-check-label">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="Diachi">Dia chi</label>
                <input type="text" class="form-control" name="Diachi" placeholder="Enter Diachi" id="Diachi" value = "<?php echo $row['Diachi']?>">
            </div>
          
            
            
            <button type="submit" class="btn btn-primary">Sua sinh vien</button>
        </form>
    </div>
</body>

</html>>


