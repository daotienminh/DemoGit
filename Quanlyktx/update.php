
<?php
$id = $_POST['id'];
$masv = $_POST['masv'];
$phong = $_POST['phong'];
$tang = $_POST['tang'];
require_once 'connect.php';

$updatesql = "UPDATE phong SET masv='$masv', phong ='$phong',tang ='$tang' WHERE id ='$id' ";
if (mysqli_query($conn, $updatesql))
{
    echo "<h1>Them thanh cong </h1>";
    $themsql = "INSERT INTO  pay(phong,tang) VALUES('$phong','$tang')";
    if(mysqli_query($conn, $themsql)) {
        echo "<h1>Them thanh cong </h1>";
    }else{
        echo "<h1>Them khong thanh cong </h1>";
    }
}
else{
    echo "<h1>Them khong thanh cong </h1>";
}
header("Location: ds.php");
?>


