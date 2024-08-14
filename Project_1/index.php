<?php
    session_start();
    if(!isset($_SESSION['mySession'])){
        header("location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #343a40;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-white py-4">Admin Dashboard</h4>
        <a href="index.php">Dashboard</a>
        <a href="#" class="active">Quản lý người dùng</a>
        <a href="#">Quản lý sản phẩm</a>
        <a href="#">Quản lý đơn hàng</a>
        <a href="#settings">Cài đặt</a>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Thông báo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tài khoản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php" type="submit" name="logout">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dashboard content -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Người dùng</h5>
                            <p class="card-text">Số lượng: 150</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm</h5>
                            <p class="card-text">Số lượng: 230</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Đơn hàng</h5>
                            <p class="card-text">Số lượng: 45</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-white bg-danger mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Lợi nhuận</h5>
                            <p class="card-text">$10,000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other content -->
            <div class="card mt-4">
                <div class="card-header">
                    Thông tin chi tiết
                </div>
                <div class="card-body">
                    <p class="card-text">Thêm nội dung chi tiết về các mục trong trang quản lý ở đây.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
