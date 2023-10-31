<?php 
$id = $_GET['sid'];
require_once 'connect.php';
$sua_sql = "SELECT * FROM phong WHERE id = $id";
$result = mysqli_query($conn, $sua_sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua lop</title>
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
        <h1 style="color:brown">Sửa </h1>
        <form action="update.php" method="post">
        <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
            </div>
       
        <div style="display: flex; align-items: flex-start;">
   

            </div>
            <div class="form-group">
                <label for="masv">Ma sinh vien</label>
                <input type="text" class="form-control" name="masv" id="masv" 
                value ="<?php echo $row['masv']?>">
            </div>
            <div class="form-group">    
                <label for="" >Phòng</label>
                <select name="phong" class="form-control">    
              
                 <option value="phòng 01">Phòng 01</option>
                 <option value="Phòng 02">Phòng 02</option>
                 <option value="phòng 03">Phòng 03</option>
                 <option value="Phòng 04">Phòng 04</option>
                 <option value="phòng 05">Phòng 05</option>
                 <option value="Phòng 06">Phòng 06</option>
                 <option value="phòng 07">Phòng 07</option>
                 <option value="Phòng 08">Phòng 08</option>
                
                 </select>
           </div>
           <div class="form-group">    
                <label for="" >Tầng</label>
                <select name="tang" class="form-control">    
              
                 <option value="Tầng 01">Tầng 01</option>
                 <option value="Tầng 02">Tầng 02</option>
                 <option value="Tầng 03">Tầng 03</option>
                 <option value="Tầng 04">Tầng 04</option>
                 <option value="Tầng 05">Tầng 05</option>
                
                 </select>
           </div>
       
          
            <button type="submit" class="btn btn-primary">Sua</button>
        </form>
    </div>
</body>

</html>>


