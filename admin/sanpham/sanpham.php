<?php
include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';
?>
<div class="row ">
  <div class="col-12">
    <div class="card mb-2">
      <div class="card-header">
        <h5 class="card-title">bảng sản phẩm  </h5>
        <hr>
        <button type="button" class="btn btn-success">
          <a href="add_sp.php" class="text-white">thêm sản phẩm</a>
        </button>
      </div>
      <div class="card-body">
        <div class="border rounded-3">
          <div class="table-responsive">
            <table class="table align-middle custom-table m-0">
              <thead>
                <tr>
                  <th>tên sản phẩm  </th>
                  <th>mô tả </th>
                  <th>giá sản phẩm</th>
                  <th>lịch sử mua bán </th>
                  <th>thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lk = "SELECT * FROM sanpham order by id_sp";

                $result = mysqli_query($conn, $lk);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["mota"]; ?></td>
                    <td><?php echo $row["gia"]; ?></td>
                    <td><?php echo $row["lichsu"]; ?></td>
                    <td>
                      <button type="button" class="btn btn-primary">
                        <a href="edit_sp.php?id=<?php echo $row["id_sp"]; ?>" class="text-white">Sửa</a>
                      </button>

                      <button type="button" class="btn btn-danger">
                        <a onclick="return confirm('Bạn có muốn xóa khuyến mãi này không?');" href="xoa_sp.php?id=<?php echo $row["id_sp"]; ?>" class="text-white">Xóa</a>
                      </button>

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