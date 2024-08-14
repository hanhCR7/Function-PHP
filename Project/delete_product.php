<?php
    include "./connect/connect.php";
    $this_id = $_GET['this_id'];
    //Xóa sản phẩm
    $sql = " DELETE FROM product WHERE id='$this_id' ";
    //chạy
    mysqli_query($conn, $sql);
    //quay lại trang product
    header("location: product.php");
    
?>