<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>đăng nhập </title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="../html/assets/images/favicon.svg" />

    <link rel="stylesheet" href="../html/assets/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="../html/assets/css/main.min.css" />
</head>
<?php
session_start();
ob_start();

include '../connectdb/db.php';

if (isset($_POST['login'])) {
   
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Sử dụng prepared statement để ngăn chặn tấn công SQL Injection
    $query = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = mysqli_prepare($conn, $query); // chuẩn bị truy vấn csdl 
    mysqli_stmt_bind_param($stmt, "ss", $username, $password); // hàm dùng để liên kết các tham số với giá trị cụ thể 
    mysqli_stmt_execute($stmt); // hàm thực thi câu lệnh 
    $result = mysqli_stmt_get_result($stmt); // hàm lấy kết quả truy vấn của một đối tượng 

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header('Location: index.php');
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
ob_end_flush();
?>

<body class="bg-one">
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="my-5">
                    <div class="card p-md-4 p-sm-3">
                        <div class="login-form">
                            <a href="" class="mb-4 d-flex">
                                <img src="../html/assets/images/logo-sm.svg" class="img-fluid login-logo" alt="Bootstrap Gallery" />
                            </a>
                            <h2 class="mt-4 mb-4">Login</h2>
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter your username" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter your email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your password" />
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPassword" />
                                    <label class="form-check-label" for="rememberPassword">nhớ mật khẩu </label>
                                </div>
                                <a href="" class="text-success text-decoration-underline">quên mật khẩu?</a>
                            </div>
                            <div class="d-grid py-3 mt-3">
                                <button type="submit" name="login" class="btn btn-lg btn-success">
                                    LOGIN
                                </button>
                            </div>
                            <div class="text-center pt-4">
                                <span>bạn chưa có tài khoản?</span>
                                <a href="signup.php" class="text-success text-decoration-underline">
                                    SignUp</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container end -->
</body>


</html>