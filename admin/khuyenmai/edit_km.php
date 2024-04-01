<?php

include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';
$sid = $_GET['id'];

$lk = "SELECT * FROM khuyenmai WHERE id_km=$sid";

$result = mysqli_query($conn, $lk);

$row = mysqli_fetch_assoc($result);


?>
<style>
    option {
        background-color: black;
    }
</style>
<div class="container">
    <form action="uppdate_km.php" method="post">
        <input type="hidden" name="id" value="<?php echo $sid; ?>">
        <div class="mb-3">
            <select name="idkh" class="form-select">
                <?php
                $lk = "SELECT * FROM khachhang ORDER BY idkh";
                $result = mysqli_query($conn, $lk);
                if (mysqli_num_rows($result) > 0) {
                    while ($khachhang = mysqli_fetch_assoc($result)) {
                        $selected = ($khachhang['idkh'] == $row['idkh']) ? 'selected' : '';
                ?>
                        <option value="<?php echo $khachhang['idkh']; ?>" <?php echo $selected; ?>><?php echo $khachhang['name']; ?></option>
                <?php
                    }
                } else {
                    echo "<option value=''>Không có khách hàng</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">mã khuyến mãi </label>
            <input type="text" class="form-control" name="ma_km" value="<?php echo $row['ma_km']; ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mô tả </label>
            <input type="text" class="form-control" name="mota" value="<?php echo $row['mota']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">thời gian diễn ra </label>
            <input type="text" class="form-control" name="thoigian" value="<?php echo $row['thoigian']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">điều kiện áp dụng </label>
            <input type="text" class="form-control" name="dk_km" value="<?php echo $row['dk_km']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">lịch sử sd của khách hàng</label>
            <input type="text" class="form-control" name="lichsu" value="<?php echo $row['lichsu']; ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>



<?php include '../include/script.php'; ?>