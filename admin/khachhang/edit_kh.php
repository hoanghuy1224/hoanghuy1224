<?php
include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

$sid = $_GET['sid'];

$edit = "SELECT * FROM  khachhang WHERE idkh=$sid";

$result = mysqli_query($conn, $edit);

$row = mysqli_fetch_assoc($result);


?>
<div class="container">
    <form action="uppdate_kh.php" method="post">
        <input type="hidden" name="sid" value="<?php echo $sid; ?>">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tên khách hàng </label>
            <input type="text" class="form-control" name="name" value="<?php echo $row["name"];  ?>">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">địa chỉ </label>
            <input type="text" class="form-control" name="address" value="<?php echo $row["address"];  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">số điện thoại </label>
            <input type="text" class="form-control" name="phone" value="<?php echo $row["phone"];  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email </label>
            <input type="text" class="form-control" name="email" value="<?php echo $row["email"];  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">thông tin hóa đơn </label>
            <input type="text" class="form-control" name="thongtin" value="<?php echo $row["thongtin"];  ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">lịch sử mua hàng </label>
            <input type="text" class="form-control" name="history" value="<?php echo $row["history"];  ?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>


<?php include '../include/script.php'; ?>