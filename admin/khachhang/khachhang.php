<?php
include '../connectdb/db.php';
include '../include/header.php';
include '../include/navbar.php';
?>
<div class="row ">

  <div class="col-12">
    <div class="card mb-2">
      <div class="card-header" 
        <h5 class="card-title"> bảng khách hàng </h5>
        <hr>
        <button type="button" class="btn btn-success">
          <a href="add_khachhang.php" class="text-white">thêm khách hàng </a>
        </button>
      </div>
      <div class="card-body">
        <div class="border rounded-3">
          <div class="table-responsive">
            <table class="table align-middle custom-table m-0">
              <thead>
                <tr>
                  <th>tên khách hàng </th>
                  <th>địa chỉ </th>
                  <th>số điện thoại</th>
                  <th>email</th>
                  <th>thông tin hóa đơn </th>
                  <th>lịch sử mua hàng </th>
                  <th>thao tác </th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lk = "SELECT *FROM khachhang order by idkh ";

                $result = mysqli_query($conn, $lk);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["thongtin"]; ?></td>
                    <td><?php echo $row["history"]; ?></td>
                    <td>
                      <button type="button" class="btn btn-primary"><a href="edit_kh.php?sid=<?php echo $row["idkh"]; ?>" class="text-white">sửa</a></button>
                      <button type="button" class="btn btn-danger"><a onclick="return confirm('bạn có muốn xóa khách hàng này không ');" href="xoa_kh.php?sid=<?php echo $row["idkh"]; ?>" class="text-white">xóa</a></button>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include '../include/script.php'; ?>