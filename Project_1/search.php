<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/search.css">
    <title>Thông tin sản phẩm</title>
</head>
<body>
    <div class="container mt-5">
    <a href="add_product.php" class="btn btn-primary">
		Thêm Mới
	</a>
    <form class="d-flex" method="post" role="search">
        <input class="form-control me-2" name="content" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" name="btn" type="submit">Search</button>
    </form>
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
            if(isset($_POST['btn'])){
                $Content = $_POST['content'];
            }
            else{
                $Content = false;
            }
        ?>
        <?php
            require_once "./connect/connect.php";
            $sql = "SELECT * FROM product WHERE name LIKE '%$Content%'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td><img src='img/product/{$row['img']}' alt=''></td>
                    <td>{$row['price']}</td>
                    <td>{$row['warranty']}</td>
                    <td>
                        <a href='edit_product.php?this_id={$row['id']}' class='btn btn-success'>Sửa</a>
                        <a href='delete_product.php?this_id={$row['id']}' class='btn btn-danger'>Xóa</a>
                    </td>
                </tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>