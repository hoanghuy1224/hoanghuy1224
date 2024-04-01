  <!-- App container starts -->
  <div class="app-container">

    <!-- App header starts -->
    <div class="app-header d-flex align-items-center">

      <!-- Container starts -->
      <div class="container">

        <!-- Row starts -->
        <div class="row">
          <div class="col-md-3 col-2">

            <!-- App brand starts -->
            <div class="app-brand">
              <a href="../view/index.php" class="d-lg-block d-none">
                <h3>QUẢN LÍ KHÁCH HÀNG</h3>
              </a>
              <a href="../view/index.php" class="d-lg-none d-md-block">
                <img src="../html/assets/images/logo-sm.svg" class="logo" alt="" />
              </a>
            </div>
            <!-- App brand ends -->

          </div>
          <div class="col-md-9 col-10">
            <!-- App header actions start -->
            <div class="header-actions d-flex align-items-center justify-content-end">

              <!-- Search container start -->
              <div class="search-container d-none d-lg-block">
                <input type="text" class="form-control" placeholder="Search" />
                <i class="icon-search"></i>
              </div>
              <!-- Search container end -->

              <div class="dropdown">
                <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="../html/assets/images/flags/1x1/vn.svg" class="flag-img" alt="vietnam" />
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini">
                  <div class="country-container">
                    <a href="../view/index.php" class="py-2">
                      <img src="../html/assets/images/flags/1x1/us.svg" alt="USA" />
                    </a>
                    <a href="../view/index.php" class="py-2">
                      <img src="../html/assets/images/flags/1x1/in.svg" alt="India" />
                    </a>
                    <a href="../view/index.php" class="py-2">
                      <img src="../html/assets/images/flags/1x1/tr.svg" alt="Turkey" />
                    </a>
                    <a href="../view/index.php" class="py-2">
                      <img src="../html/assets/images/flags/1x1/gb.svg" alt="Great Britain" />
                    </a>
                    <a href="../view/index.php" class="py-2">
                      <img src="../html/assets/images/flags/1x1/id.svg" alt="Indonesia" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="dropdown d-sm-block d-none">
                <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="icon-mail fs-4 lh-1"></i>
                  <span class="count rounded-circle bg-danger">9</span>
                </a>
              </div>
              <div class="dropdown d-sm-block d-none">
                <a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="icon-twitch fs-4 lh-1"></i>
                  <span class="count rounded-circle bg-danger">5</span>
                </a>
              </div>
              <div class="dropdown ms-2">
                <a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="d-none d-md-block">hoàng quang huy</span>
                  <img src="../html/assets/images/products/product11.jpg"  class="img-2x m-2 me-0 rounded-3" />
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
                  <!-- <a class="dropdown-item d-flex align-items-center py-2" href="#"><i class="icon-smile fs-4 me-3"></i>User Profile</a>
                  <a class="dropdown-item d-flex align-items-center py-2" href="#"><i class="icon-settings fs-4 me-3"></i>Account
                    Settings</a> -->
                  <a class="dropdown-item d-flex align-items-center py-2" href="../view/logout.php"><i class="icon-log-out fs-4 me-3"></i>Logout</a>
                </div>
              </div>

              <!-- Toggle Menu starts -->
              <button class="btn btn-success btn-sm ms-3 d-lg-none d-md-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#MobileMenu">
                <i class="icon-menu"></i>
              </button>
              <!-- Toggle Menu ends -->

            </div>
            <!-- App header actions end -->

          </div>
        </div>
        <!-- Row ends -->

      </div>
      <!-- Container ends -->

    </div>
    <!-- App header ends -->

    <!-- App navbar starts -->
    <nav class="navbar navbar-expand-lg p-0">
      <div class="container">
        <div class="offcanvas offcanvas-end" id="MobileMenu">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title semibold">Navigation</h5>
            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="offcanvas">
              <i class="icon-clear"></i>
            </button>
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown active-link">
              <a class="nav-link" href="../view/index.php">
                TRANG CHỦ
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../khachhang/khachhang.php"> khách hàng </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../donhang/donhang.php"> đơn hàng </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="../khuyenmai/khuyenmai.php" role="button">
                khuyến mãi
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="../sanpham/sanpham.php" role="button">
                sản phẩm
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                đăng kí tài khoản 
              </a>
              <ul class="dropdown-menu">
                <!-- <li>
                  <a class="dropdown-item" href="../view/login.php">
                    <span>Login</span>
                  </a>
                </li> -->
                <li>
                  <a class="dropdown-item" href="../view/signup.php">
                    <span>Signup</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- App Navbar ends -->