<?php
    require './connect/connect.php';
    if(isset($_POST['btn'])){
        $name = $_POST['productName'];
        $price = $_POST['productPrice'];
        $warranty = $_POST['productWarranty'];
        // chỉ lấy tên hình ảnh để gửi đến data
        $img = $_FILES['productImage']['name'];
        //Lấy đường dẫn của ảnh
        $img_tmp_name = $_FILES['productImage']['tmp_name'];
        //add thông tin vào csdl
        $sql = "INSERT INTO product (name, img, price, warranty) 
        VALUES ('$name','$img','$price','$warranty')";
        mysqli_query($conn, $sql);
        // tải ảnh vào thư mục img
        move_uploaded_file($img_tmp_name, './img/product'.$img);
        // thêm xong chuyển về product.php
        header('location: product.php');
        exit();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm Sản Phẩm</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Thêm Sản Phẩm</h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="productName" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control" id="productName" name="productName" required>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Giá</label>
                <input type="text" class="form-control" id="productPrice" name="productPrice" required>
            </div>
            <div class="mb-3">
                <label for="productWarranty" class="form-label">Bảo Hành (tháng)</label>
                <input type="text" class="form-control" id="productWarranty" name="productWarranty" required>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Hình Ảnh</label>
                <input class="form-control" type="file" id="productImage" name="productImage" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Thêm Sản Phẩm</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>