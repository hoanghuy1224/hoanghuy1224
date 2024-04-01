<?php
include '../include/header.php';
include '../include/navbar.php';
include '../connectdb/db.php';
?>
<div class="row ">
  <div class="col-12">
    <div class="card mb-2">
      <div class="card-header">
        <h5 class="card-title">bảng khuyến mãi </h5>
        <hr>
        <button type="button" class="btn btn-success">
          <a href="add_km.php" class="text-white">thêm khuyến mãi</a>
        </button>
      </div>
      <div class="card-body">
        <div class="border rounded-3">
          <div class="table-responsive">
            <table class="table align-middle custom-table m-0">
              <thead>
                <tr>
                  <th>mã khuyến mãi </th>
                  <th>mô tả </th>
                  <th>thời gian diễn ra </th>
                  <th>điều kiện áp dụng </th>
                  <th>lịch sử sd của khách hàng</th>
                  <th>thao tác</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lk = "SELECT * FROM khuyenmai order by id_km";

                $result = mysqli_query($conn, $lk);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tr>
                    <td><?php echo $row["ma_km"]; ?></td>
                    <td><?php echo $row["mota"]; ?></td>
                    <td><?php echo $row["thoigian"]; ?></td>
                    <td><?php echo $row["dk_km"]; ?></td>
                    <td><?php echo $row["lichsu"]; ?></td>
                    <td>
                      <button type="button" class="btn btn-primary">
                        <a href="edit_km.php?id=<?php echo $row["id_km"]; ?>" class="text-white">Sửa</a>
                      </button>

                      <button type="button" class="btn btn-danger">
                        <a onclick="return confirm('Bạn có muốn xóa khuyến mãi này không?');" href="xoa_km.php?id=<?php echo $row["id_km"]; ?>" class="text-white">Xóa</a>
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