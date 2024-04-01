<?php
include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';
?>
<div class="row ">
  <div class="col-12">
    <div class="card mb-2">
      <div class="card-header">
        <h5 class="card-title">bảng đơn hàng </h5>
        <hr>
        <button type="button" class="btn btn-success">
          <a href="add_donhang.php" class="text-white">thêm đơn hàng</a>
        </button>
      </div>
      <div class="card-body">
        <div class="border rounded-3">
          <div class="table-responsive">
            <table class="table align-middle custom-table m-0">
              <thead>
                <tr>
                  <th>mã đơn hàng </th> 
                  <th>ngày đặt hàng </th>
                  <th>sản phẩm được đặt hàng</th>
                  <th>giá trị đơn hàng</th>
                  <th>trạng thái </th>
                  <th>thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lk = "SELECT * FROM donhang order by ma_dh";

                $result = mysqli_query($conn, $lk);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>  
                    <td><?php echo $row["ma_dh"]; ?></td>                                 
                    <td><?php echo $row["ngay"]; ?></td>
                    <td><?php echo $row["sp_dathang"]; ?></td>
                    <td><?php echo $row["tong"]; ?></td>
                    <td><?php echo $row["trangthai"]; ?></td>
                    <td>
                      <button type="button" class="btn btn-primary"><a href="edit_dh.php?sid=<?php echo $row["iddh"]; ?>" class="text-white">sửa</a></button>
                      <button type="button" class="btn btn-danger"><a onclick="return confirm('bạn có muốn xóa đơn hàng này không ');" href="xoa_dh.php?sid=<?php echo $row["iddh"]; ?>" class="text-white">xóa</a></button>
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