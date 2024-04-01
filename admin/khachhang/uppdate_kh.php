<?php 
ob_start(); // Bắt đầu bộ đệm đầu ra

if (isset($_POST['submit'])) {
    // $idkh = $_POST['idkh'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $thongtin = $_POST['thongtin'];
    $history = $_POST['history'];

    $id = $_POST['sid'];

    include '../connectdb/db.php';
    $update_ql = "UPDATE khachhang SET name='$name',address='$address',phone='$phone',email='$email',thongtin='$thongtin',history='$history' WHERE idkh='$id' ";
    //  echo $them; exit;

    if (mysqli_query($conn, $update_ql)) {
        
         header("Location: khachhang.php");
    }
}
ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt
?>