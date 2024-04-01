<?php 
ob_start(); // Bắt đầu bộ đệm đầu ra

include '../connectdb/db.php';

 $sid = $_GET['sid'];

 $xoa = "DELETE FROM khachhang WHERE idkh = $sid";

 if (mysqli_query($conn,$xoa)) {
    header("location: khachhang.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  
  
  ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt
?>
