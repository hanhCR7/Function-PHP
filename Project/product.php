<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/product.css">
    <title>Thông tin sản phẩm</title>
</head>
<body>
    <div class="container mt-5">
    <a href="add_product.php" class="btn btn-primary">
		Thêm Mới
	</a>
    </div>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Bảo Hành</th>
                <th scope="col">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "connect/connect.php";
                $sql = "SELECT * FROM product";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)){ 
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><img src="img/product/<?php echo $row['img']?>" alt=""></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['warranty']?></td>
                    <td>
                        <a href="edit_product.php?this_id=<?php echo $row['id']?>" class="btn btn-success">Sửa</a>
                        <a href="delete_product.php?this_id=<?php echo $row['id']?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>