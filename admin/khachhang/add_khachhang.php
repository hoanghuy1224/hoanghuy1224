<?php
ob_start(); // Bắt đầu bộ đệm đầu ra

include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';

if (isset($_POST['submit'])) {
  // $idkh = $_POST['idkh'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $thongtin = $_POST['thongtin'];
  $history = $_POST['history'];

  $sql = "INSERT INTO khachhang  (name,address,phone,email,thongtin,history)
    VALUES ('$name','$address','$phone' ,'$email' ,'$thongtin' ,'$history' )";

  if (mysqli_query($conn, $sql)) { // thực thi câu lệnh 
    header("Location: khachhang.php"); // điều hướng về trang khachhang.php
    exit;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} else {
  // echo 'không có khách hàng nào để thêm ';
}

ob_end_flush(); // Kết thúc và gửi bộ đệm đầu ra đến trình duyệt

?>
<div class="container">
  <form action="add_khachhang.php" method="post">
    <!-- <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">mã kh</label>
      <input type="text" class="form-control" name="idkh">
    </div> -->
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">tên khách hàng </label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">địa chỉ </label>
      <input type="text" class="form-control" name="address">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">số điện thoại </label>
      <input type="text" class="form-control" name="phone">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">email </label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">thông tin hóa đơn </label>
      <input type="text" class="form-control" name="thongtin">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">lịch sử mua hàng </label>
      <input type="text" class="form-control" name="history">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>



<?php include '../include/script.php'; ?>