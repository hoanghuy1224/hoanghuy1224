<?php
include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

$sid = $_GET['sid'];

$edit = "SELECT * FROM  donhang WHERE iddh=$sid";

$result = mysqli_query($conn, $edit);

$row = mysqli_fetch_assoc($result);


?>
<style>
    option {
        background-color: black;
    }
</style>
<div class="container">
    <form action="uppdate_dh.php" method="post">
        <input type="hidden" name="sid" value="<?php echo $sid; ?>">
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
            <label for="exampleInputEmail1" class="form-label">mã đơn hàng </label>
            <input type="text" class="form-control" name="ma_dh" value="<?php echo $row["ma_dh"]; ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ngày đặt hàng </label>
            <input type="text" class="form-control" name="ngay" value="<?php echo $row["ngay"]; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">sản phẩm được đặt hàng</label>
            <input type="text" class="form-control" name="sp_dathang" value="<?php echo $row["sp_dathang"]; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">giá trị đơn hàng </label>
            <input type="text" class="form-control" name="tong" value="<?php echo $row["tong"]; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">trạng thái đơn hàng </label>
            <input type="text" class="form-control" name="trangthai" value="<?php echo $row["trangthai"]; ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>



<?php include '../include/script.php'; ?>