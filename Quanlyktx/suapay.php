<?php 
$id = $_GET['sid'];
require_once 'connect.php';
$sua1_sql = "SELECT * FROM pay WHERE id = $id";
$result = mysqli_query($conn, $sua1_sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sưa</title>
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
        <h1 style="color:brown">Sửa</h1>
        <form action="updatepay.php" method="post">
        <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
            </div>
            <div class="form-group">
            <label for="cscd">Phòng </label>
                <input type="text" class="form-control" name="phong" id="phong" value ="<?php echo $row['phong']?>">
            </div>
            <div class="form-group">
                <label for="tang">Tầng</label>
                <input type="text" class="form-control" name="tang" id="tang" value = "<?php echo $row['tang']?>">
            </div>
       
    
   
            <div class="form-group">
            <label for="cscd">chỉ số cũ (điện)</label>
                <input type="text" class="form-control" name="cscd" id="cscd" value ="<?php echo $row['cscd']?>">
            </div>
            <div class="form-group">
                <label for="csmd">chỉ số mới (điện)</label>
                <input type="text" class="form-control" name="csmd" id="csmd" value = "<?php echo $row['csmd']?>">
            </div>
            
            <div class="form-group">
            <label for="cscn">chỉ số cũ (nước)</label>
                <input type="text" class="form-control" name="cscn" id="cscn" value ="<?php echo $row['cscn']?>">
            </div>
            <div class="form-group">
                <label for="csmn">chỉ số mới (nước)</label>
                <input type="text" class="form-control" name="csmn" id="csmn" value = "<?php echo $row['csmn']?>">
            </div>
            <div class="form-group">
                <label for="dongia">Đơn giá điện</label>
                <input type="text" class="form-control" name="dongia" id="dongia" value = "<?php echo $row['dongia']?>">
            </div>
            <div class="form-group">
                <label for="dongia1">Đơn giá nước</label>
                <input type="text" class="form-control" name="dongia1" id="dongia1" value = "<?php echo $row['dongia1']?>">
            </div>
         
         
          
          
            
            
            <button type="submit" class="btn btn-primary">Sua sinh vien</button>
        </form>
    </div>
</body>

</html>>


