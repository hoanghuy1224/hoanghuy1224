<?php
ob_start(); // Bắt đầu bộ đệm đầu ra

if (isset($_POST['submit'])) {
    // $idkh = $_POST['idkh'];
    $ma_dh = $_POST['ma_dh'];
    $ngay = $_POST['ngay'];
    $sp_dathang = $_POST['sp_dathang'];
    $tong = $_POST['tong'];
    $trangthai = $_POST['trangthai'];
    $idkh = $_POST['idkh'];
    $id = $_POST['sid'];

    include '../connectdb/db.php';
    $update_ql = "UPDATE donhang SET ma_dh='$ma_dh', ngay='$ngay' ,sp_dathang='$sp_dathang' ,tong='$tong' ,trangthai='$trangthai',idkh='$idkh' WHERE iddh='$id' ";
    //  echo $them; exit;

    if (mysqli_query($conn, $update_ql)) {

        header("Location: donhang.php");
    }
}
ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt
