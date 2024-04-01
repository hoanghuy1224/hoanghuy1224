<?php

include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

$sid = $_GET['id'];

$edit = "SELECT * FROM  sanpham WHERE id_sp=$sid";

$result = mysqli_query($conn, $edit);

$row = mysqli_fetch_assoc($result);


?>
<style>
    option {
        background-color: black;
    }
</style>
<div class="container">
    <form action="uppdate_sp.php" method="post">
        <input type="hidden" name="id" value="<?php echo $sid; ?>">
        <div class="mb-3">
            <select name="iddh" class="form-select">
                <?php
                $lk = "SELECT * FROM donhang ORDER BY iddh";
                $result = mysqli_query($conn, $lk);
                if (mysqli_num_rows($result) > 0) {
                    while ($donhang = mysqli_fetch_assoc($result)) {
                        $selected = ($donhang['iddh'] == $row['iddh']) ? 'selected' : '';
                ?>
                        <option value="<?php echo $donhang['iddh']; ?>" <?php echo $selected; ?>><?php echo $donhang['ma_dh']; ?></option>
                <?php
                    }
                } else {
                    echo "<option value=''>Không có đơn hàng</option>";
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tên sản phẩm</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mô tả </label>
            <input type="text" class="form-control" name="mota" value="<?php echo $row['mota']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">giá </label>
            <input type="text" class="form-control" name="gia" value="<?php echo $row['gia']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">lịch sử mua bán</label>
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