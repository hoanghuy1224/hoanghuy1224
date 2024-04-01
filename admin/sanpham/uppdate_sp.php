<?php 
ob_start(); // Bắt đầu bộ đệm đầu ra

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $lichsu = $_POST['lichsu'];
    $iddh = $_POST['iddh'];
    $sid = $_POST['id'];

    include '../connectdb/db.php';
    $update_ql = "UPDATE sanpham SET name='$name', mota='$mota',gia='$gia',lichsu='$lichsu',iddh='$iddh' WHERE id_sp='$sid' ";
    //  echo $them; exit;

    if (mysqli_query($conn, $update_ql)) {
        
         header("Location: sanpham.php");
    }
}
ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt
?>