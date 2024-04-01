<?php
ob_start(); // Bắt đầu bộ đệm đầu ra

include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

if (isset($_POST['submit'])) {

    $ma_dh = $_POST['ma_dh'];
    $ngay = $_POST['ngay'];
    $sp_dathang = $_POST['sp_dathang'];
    $tong = $_POST['tong'];
    $trangthai = $_POST['trangthai'];
    $idkh = $_POST['idkh'];
    if (isset($idkh)) {
        echo 'tồn tại trường này ';
    } else {
        echo 'không tồn tại trường này ';
    }


    $sqll = "INSERT INTO `donhang` ( `ma_dh`, `ngay`, `sp_dathang`, `tong`,`trangthai`,`idkh`)
    VALUES ('$ma_dh','$ngay','$sp_dathang','$tong','$trangthai','$idkh')";


    if (mysqli_query($conn, $sqll)) { // thực thi câu lệnh 
        // echo 'thêm thành công ';
        header("Location: donhang.php"); // điều hướng về trang khachhang.php
        exit;
    } else {
        echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
    }
} else {
    // echo 'không có khách hàng nào để thêm ';
}

ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt

?>
<style>
    option{
        background-color: black;
    }
</style>
<div class="container">
    <form action="add_donhang.php" method="post">
        <div class="mb-3">
            <select  for="exampleInput" name="idkh" class="form-select">
                <?php
                $lk = "SELECT * FROM khachhang ORDER BY idkh";
                $result = mysqli_query($conn, $lk);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option  value='" . $row["idkh"] . "'>" . $row["name"] . "</option>";
                    }
                } else {
                    echo "<option value=''>Không có khách hàng</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">mã đơn hàng </label>
            <input type="text" class="form-control" name="ma_dh">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ngày đặt hàng </label>
            <input type="text" class="form-control" name="ngay">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">sản phẩm được đặt hàng</label>
            <input type="text" class="form-control" name="sp_dathang">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">giá trị đơn hàng </label>
            <input type="text" class="form-control" name="tong">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">trạng thái đơn hàng </label>
            <input type="text" class="form-control" name="trangthai">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>



<?php include '../include/script.php'; ?>