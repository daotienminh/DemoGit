<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liet ke Lop</title>
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
        <h1 style="color:brown">Danh Sách Nội Trú Kí Túc Xá</h1>

        <a href="danhsach.php" class="btn btn-info mb-2"  >Danh sách sinh viên nội trú </a>
        <!-- Nút chuyển đến danh sách phòng -->
        <a href="ds.php" class="btn btn-primary mb-4">Danh sách Phòng</a>
        <!-- Nút chuyển đến danh sách điện nước -->
        <a href="dspay.php" class="btn btn-success mb-2">Danh sách điện nước</a>
           <!--Chức năng tìm kiếm-->
     <form method="post">
            <input  type="text"name="noidung" style="width: 80%;";  placeholder="Tìm kiếm theo phòng" >
            <button type="submit" name="btn"> Tìm Kiếm </button>
            <button type="submit" name="btn"> Thoát </button>
        </form>
        <br>
        <?php
       require_once 'connect.php';
       if(isset($_POST['btn'])){
            $noidung = mysqli_real_escape_string($conn, $_POST['noidung']); 
        } else {
            $noidung = '';
        }
        if(isset($_POST['clear'])){
            header("Refresh:0");
         }
        ?>
       
       <table class="table table-bordered">
            <thead class="thead-dark" >
                <tr>
                    <th>STT</th>
                    <th>Mã sinh viên</th>
                    <th>Phòng</th>
                    <th>Tầng</th>
                    <th>Thao tac</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                require_once 'connect.php';
                $danhsach_sql = "SELECT * FROM phong WHERE phong LIKE '%$noidung%' order by id";
                $result = mysqli_query($conn, $danhsach_sql);
                while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $r['masv']; ?></td>
                        <td><?php echo $r['phong']; ?></td>
                        <td><?php echo $r['tang']; ?></td>
                        
                      
                        <td>
                            <a href="sua.php?sid=<?php echo $r['id'];?>" class="btn btn-info">Sửa</a> 
                            <a onclick=" return confirm('Xác nhận xoá phòng này');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger">Xoá</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>    
        </table>
        <a href="index.php" class="btn btn-danger">Đăng Xuất</a>
    </div>
</body>

</html>
