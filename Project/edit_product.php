<?php
    include "./connect/connect.php";
    $this_id = $_GET['this_id'];
    //kết nối 
    $sql = "SELECT * FROM product WHERE id='$this_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    //Bắt sự kiện khi nhấn nút cập nhật
    if(isset($_POST['btn'])){
        $name = $_POST['productName'];
        $price = $_POST['productPrice'];
        $warranty = $_POST['productWarranty'];
        // chỉ lấy tên hình ảnh để gửi lên data
        $img = $_FILES['productImage']['name'];
        // lấy nguồn của hình ảnh
        $img_tmp = $_FILES['productImage']['tmp_name'];
        $sql = "UPDATE product SET name='$name', 
        img='$img', price='$price',warranty='$warranty'
        WHERE id=".$this_id;
        //hàm chạy
        mysqli_query($conn, $sql);
        //chuyển ảnh sau khi update vào img/product
        move_uploaded_file($img_tmp, '.img/product/'.$img);
        //chuyển về product.php
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
    <link rel="stylesheet" href="./css/edit.css">
    <title>Sửa Sản Phẩm</title>
</head>
<body>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Sửa Sản Phẩm: <?php echo $row['name'];?></h2>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="productName" class="form-label">Tên Sản Phẩm</label>
                <input type="text" class="form-control"  name="productName" value="<?php echo $row['name'];?>">
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Giá</label>
                <input type="text" class="form-control"  name="productPrice"  value="<?php echo $row['price'];?>">
            </div>
            <div class="mb-3">
                <label for="productWarranty" class="form-label">Bảo Hành (tháng)</label>
                <input type="text" class="form-control" name="productWarranty"  value="<?php echo $row['warranty'];?>">
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Hình Ảnh</label>
                <br>
                <spam><img src="./img/product/<?php echo $row['img']?>" alt="" width="100px" height="100px"></spam>
                <input class="form-control" type="file" name="productImage" >
            </div>
            <button type="submit" class="btn btn-primary" name="btn">Cập nhật</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>