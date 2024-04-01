<?php 
ob_start(); // Bắt đầu bộ đệm đầu ra

if (isset($_POST['submit'])) {

    $ma_km = $_POST['ma_km'];
    $mota = $_POST['mota'];
    $thoigian = $_POST['thoigian'];
    $dk_km = $_POST['dk_km'];
    $lichsu = $_POST['lichsu'];
    $idkh = $_POST['idkh'];
    $sid = $_POST['id'];

    include '../connectdb/db.php';
    $update_ql = "UPDATE khuyenmai SET ma_km='$ma_km', mota='$mota' ,thoigian='$thoigian' ,dk_km='$dk_km' ,lichsu='$lichsu',idkh='$idkh' WHERE id_km='$sid' ";
    //  echo $them; exit;

    if (mysqli_query($conn, $update_ql)) {
        
         header("Location: khuyenmai.php");
    }
}
ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt
?>