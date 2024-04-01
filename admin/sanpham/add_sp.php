<?php
ob_start(); // Bắt đầu bộ đệm đầu ra

include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mota = $_POST['mota'];
    $gia = $_POST['gia'];
    $lichsu = $_POST['lichsu'];
    $iddh = $_POST['iddh'];
    if (isset($iddh)) {
        echo 'tồn tại trường này ';
    } else {
        echo 'không tồn tại trường này ';
    }


    $sqll = "INSERT INTO `sanpham` ( `name`, `mota`, `gia`,`lichsu`,`iddh`)
    VALUES ('$name','$mota','$gia','$lichsu','$iddh')";


    if (mysqli_query($conn, $sqll)) { // thực thi câu lệnh 
        // echo 'thêm thành công ';
        header("Location: sanpham.php"); // điều hướng về trang khachhang.php
        exit;
    } else {
        echo "Error: " . $sqll . "<br>" . mysqli_error($conn);
    }
} else {
        //  echo 'không có sản phẩm nào để thêm ';
}

ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt

?>
<style>
    option{
        background-color: black;
    }
</style>
<div class="container">
    <form action="add_sp.php" method="post">
        <div class="mb-3">
            <select  for="exampleInput" name="iddh" class="form-select">
                <?php
                $lk = "SELECT * FROM donhang ORDER BY iddh ";
                $result = mysqli_query($conn, $lk);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option  value='" . $row["iddh"] . "'>" . $row["ma_dh"] . "</option>";
                    }
                } else {
                    echo "<option value=''>Không có sản phẩm </option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tên sản phẩm</label>
            <input type="text" class="form-control" name="name">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mô tả </label>
            <input type="text" class="form-control" name="mota">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">giá </label>
            <input type="text" class="form-control" name="gia">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">lịch sử mua bán</label>
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