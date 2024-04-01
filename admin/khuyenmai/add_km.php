<?php
ob_start(); // Bắt đầu bộ đệm đầu ra

include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

if (isset($_POST['submit'])) {

    $ma_km = $_POST['ma_km'];
    $mota = $_POST['mota'];
    $thoigian = $_POST['thoigian'];
    $dk_km = $_POST['dk_km'];
    $lichsu = $_POST['lichsu'];
    $idkh = $_POST['idkh'];
    if (isset($idkh)) {
        echo 'tồn tại trường này ';
    } else {
        echo 'không tồn tại trường này ';
    }


    $sqll = "INSERT INTO `khuyenmai` ( `ma_km`, `mota`, `thoigian`, `dk_km`,`lichsu`,`idkh`)
    VALUES ('$ma_km','$mota','$thoigian','$dk_km','$lichsu','$idkh')";


    if (mysqli_query($conn, $sqll)) { // thực thi câu lệnh 
        // echo 'thêm thành công ';
        header("Location: khuyenmai.php"); // điều hướng về trang khachhang.php
        exit;
    } else {
        echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
    }
} else {
        //  echo 'không có khách hàng nào để thêm ';
}

ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt

?>
<style>
    option{
        background-color: black;
    }
</style>
<div class="container">
    <form action="add_km.php" method="post">
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
            <label for="exampleInputEmail1" class="form-label">mã khuyến mãi </label>
            <input type="text" class="form-control" name="ma_km">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mô tả </label>
            <input type="text" class="form-control" name="mota">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">thời gian diễn ra </label>
            <input type="text" class="form-control" name="thoigian">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">điều kiện áp dụng </label>
            <input type="text" class="form-control" name="dk_km">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">lịch sử sd của khách hàng</label>
            <input type="text" class="form-control" name="lichsu">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>



<?php include '../include/script.php'; ?>