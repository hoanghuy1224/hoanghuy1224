<?php
session_start();
ob_start();
include '../connectdb/db.php';
include '../include/header.php';
include '../include/navbar.php';


// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username'])) {
  // Nếu không, chuyển hướng đến trang đăng nhập
  header('Location: login.php');
  exit(); 
}

ob_end_flush();
?>


<!-- App body starts -->
<div class="app-body">

  <!-- Container starts -->
  <div class="container">

    <!-- Row start -->
    <div class="row">
      <div class="col-12 col-xl-6">
        <!-- Breadcrumb start -->
        <ol class="breadcrumb mb-3">
          <li class="breadcrumb-item">
            <i class="icon-house_siding lh-1"></i>
            <a href="../view/index.php" class="text-decoration-none">Home</a>
          </li>
        </ol>
        <!-- Breadcrumb end -->
      </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-2">
      <div class="col-xl-6 col-12">
        <!-- Row start -->
        <div class="row gx-2">
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-header">
                <h5 class="card-title">biểu đồ </h5>
              </div>
              <div class="card-body">
                <div id="ticketsData"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="card mb-2">
              <div class="card-header">
                <h5 class="card-title">thu nhập hôm nay</h5>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <span>Completed</span>
                  <span class="fw-bold">75%</span>
                </div>
                <div class="progress small">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="card mb-2">
              <div class="card-header">
                <h5 class="card-title">tỉ lệ hủy đơn </h5>
              </div>
              <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                  <span>Assigned</span>
                  <span class="fw-bold">5</span>
                </div>
                <div class="progress small">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Row end -->
      </div>
      <div class="col-xl-6 col-12">
        <div class="row gx-2">
          <div class="col-sm-4 col-6">
            <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
              <div class="position-relative shape-block">
                <img src="../html/assets/images/shape1.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                <i class="icon-book-open"></i>
              </div>
              <div class="ms-2">
                <h3 class="m-0 fw-semibold">27</h3>
                <!-- <h6 class="m-0 fw-light text-light">Active</h6> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-6">
            <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
              <div class="position-relative shape-block">
                <img src="../html/assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                <i class="icon-check-circle"></i>
              </div>
              <div class="ms-2">
                <h3 class="m-0 fw-semibold">18</h3>
                <!-- <h6 class="m-0 fw-light text-light">Solved</h6> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-6">
            <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
              <div class="position-relative shape-block">
                <img src="../html/assets/images/shape3.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                <i class="icon-x-circle"></i>
              </div>
              <div class="ms-2">
                <h3 class="m-0 fw-semibold">12</h3>
                <!-- <h6 class="m-0 fw-light text-light">Closed</h6> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-6">
            <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
              <div class="position-relative shape-block">
                <img src="../html/assets/images/shape4.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                <i class="icon-add_task"></i>
              </div>
              <div class="ms-2">
                <h3 class="m-0 fw-semibold">3</h3>
                <!-- <h6 class="m-0 fw-light text-light">Open</h6> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-6">
            <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
              <div class="position-relative shape-block">
                <img src="../html/assets/images/shape5.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                <i class="icon-alert-triangle"></i>
              </div>
              <div class="ms-2">
                <h3 class="m-0 fw-semibold">5</h3>
                <!-- <h6 class="m-0 fw-light text-light">Critical</h6> -->
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-6">
            <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
              <div class="position-relative shape-block">
                <img src="../html/assets/images/shape6.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                <i class="icon-access_time"></i>
              </div>
              <div class="ms-2">
                <h3 class="m-0 fw-semibold">7</h3>
                <!-- <h6 class="m-0 fw-light text-light">High</h6> -->
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card mb-2">
              <div class="card-header">
                <h5 class="card-title">Avg. Response Time</h5>
              </div>
              <div class="card-body">
                <div id="avgTimeData"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-2">
      <div class="col-xl-4 col-md-6 col-sm-12 col-12">
        <div class="card mb-2">
          <div class="card-header">
            <h5 class="card-title">cuộc gọi của khách hàng</h5>
          </div>
          <div class="card-body">
            <div id="liveCallsData"></div>

            <div class="d-flex justify-content-center gap-4 my-4">
              <div class="d-flex align-items-center">
                <i class="icon-phone-incoming me-3"></i> Incoming
                <span class="badge rounded-pill bg-primary ms-2">15</span>
              </div>
              <div class="d-flex align-items-center">
                <i class="icon-phone-outgoing me-3"></i> Outgoing
                <span class="badge rounded-pill bg-secondary ms-2">18</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12 col-12">
        <div class="card mb-2">
          <div class="card-header">
            <h5 class="card-title">đại lí trực tuyến </h5>
          </div>
          <div class="card-body">
            <div id="agentsLiveData"></div>

            <div class="d-flex justify-content-center gap-4 my-4">
              <div class="d-flex align-items-center">
                Busy
                <span class="badge rounded-pill bg-primary ms-2">15</span>
              </div>
              <div class="d-flex align-items-center">
                Online
                <span class="badge rounded-pill bg-secondary ms-2">18</span>
              </div>
              <div class="d-flex align-items-center">
                Offline
                <span class="badge rounded-pill bg-dark ms-2">13</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-12 col-12">
        <div class="card mb-2">
          <div class="card-header">
            <h5 class="card-title">đơn hàng ưu tiên </h5>
          </div>
          <div class="card-body">
            <div id="lticketsPriorityData"></div>

            <div class="d-flex justify-content-center gap-4 my-4">
              <div class="d-flex align-items-center">
                High
                <span class="badge rounded-pill bg-primary ms-2">15</span>
              </div>
              <div class="d-flex align-items-center">
                Medium
                <span class="badge rounded-pill bg-secondary ms-2">18</span>
              </div>
              <div class="d-flex align-items-center">
                Low
                <span class="badge rounded-pill bg-dark ms-2">13</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gx-2">
      <div class="col-xl-6 col-lg-12 col-12">
        <div class="card mb-2">
          <div class="card-header">
            <h5 class="card-title">Top 5 khách hàng mua nhiều</h5>
          </div>
          <div class="card-body">
            <div class="border rounded-3">
              <div class="table-responsive">
                <table class="table align-middle custom-table m-0">
                  <thead>
                    <tr>
                      <th>stt</th>
                      <th>tên </th>
                      <th>địa chỉ </th>
                      <th>sdt</th>
                      <th>email</th>
                      <th>thông tin hóa đơn</th>
                      <th>lịch sử mua hàng</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>hoàng quang huy</td>
                      <td>tuyên quang </td>
                      <td>0339250091</td>
                      <td>hqhuy.12c3kx2004@gmai.com</td>
                      <td>đã mua ngày 1/4/2024</td>
                      <td>chưa mua hàng </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>hoàng quang huy</td>
                      <td>tuyên quang </td>
                      <td>0339250091</td>
                      <td>hqhuy.12c3kx2004@gmai.com</td>
                      <td>đã mua ngày 1/4/2024</td>
                      <td>chưa mua hàng </td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>hoàng quang huy</td>
                      <td>tuyên quang </td>
                      <td>0339250091</td>
                      <td>hqhuy.12c3kx2004@gmai.com</td>
                      <td>đã mua ngày 1/4/2024</td>
                      <td>chưa mua hàng </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card mb-2">
          <div class="card-header">
            <h5 class="card-title">nhận xét </h5>
          </div>
          <div class="card-body">
            <div class="scroll300">
              <div class="my-2">
                <div class="d-flex align-items-start">
                  <div class="media-box me-3 bg-primary rounded-5">
                    <img src="" alt="">
                    <!-- <i class="icon-thumbs-up"></i> -->
                  </div>
                  <div class="mb-4">
                    <h5>hoàng quang huy </h5>
                    <p class="mb-1">sản phẩm như đầu buồi!</p>
                    <p class="m-0 text-light">3h trước </p>
                  </div>
                </div>
                <div class="d-flex align-items-start">
                  <div class="media-box me-3 bg-primary rounded-5">
                    <i class="icon-thumbs-up"></i>
                  </div>
                  <div class="mb-4">
                    <h5>hoàng văn long </h5>
                    <p class="mb-1">
                      sản phẩm tốt lắm cảm ơn shop
                    </p>
                    <p class="m-0 text-light">5h trước</p>
                  </div>
                </div>
                <div class="d-flex align-items-start">
                  <div class="media-box me-3 bg-primary rounded-5">
                    <i class="icon-thumbs-up"></i>
                  </div>
                  <div class="mb-4">
                    <h5>bùi văn thiện</h5>
                    <p class="mb-1">tuyệt vời shop ơi .</p>
                    <p class="m-0 text-light">5h trước </p>
                  </div>
                </div>
                <div class="d-flex align-items-start">
                  <div class="media-box me-3 bg-primary rounded-5">
                    <i class="icon-thumbs-up"></i>
                  </div>
                  <div class="mb-4">
                    <h5>Dawn Shepherd</h5>
                    <p class="mb-1">Great support guys</p>
                    <p class="m-0 text-light">6 mins ago</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-12">
        <div class="card mb-2">
          <div class="card-header">
            <h5 class="card-title">New & Closed</h5>
          </div>
          <div class="card-body">
            <div id="newClosedGraph"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Row end -->

  </div>
  <!-- Container ends -->

</div>
<!-- App body ends -->

<!-- App footer start -->
<div class="app-footer">
  <div class="container">
    <span>© Bootstrap Gallery 2024</span>
  </div>
</div>
<!-- App footer end -->

</div>
<!-- App container ends -->

</div>



<?php include '../include/script.php'; ?>