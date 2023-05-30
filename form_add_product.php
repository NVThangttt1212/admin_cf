<?php
require '../../constant.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Add Product</title>
    <!-- link css -->
    <link rel="stylesheet" href="../../assets/css/form_css/form_add_product.css">
</head>

<body>
    <div class="wrapper">
        <form class="form-class" action="<?php echo dir_root_url; ?>" method="post" enctype="multipart/form-data">
            <h2 class="heading">Thông tin sản phẩm được thêm</h2>
            <div class="inner">ID sản phẩm: <br> <input type="number" name="product_id" required placeholder="Nhập ID sản phẩm"></div>
            <div class="inner">Tên sản phẩm: <br> <input type="text" name="product_name" required placeholder="Nhập tên sản phẩm"></div>
            <div class="radio-class">Loại: <br>
                <div><input type="radio" name="category_id" value="1" checked> Coffee</div>
                <div><input type="radio" name="category_id" value="2"> Cake</div>
            </div>
            <div class="inner">Ảnh sản phẩm: <br> <input type="file" name="product_img"></div>
            <div class="inner">Mô tả: <br> <textarea name="product_desc" rows="8" cols="50"></textarea></div>
            <div class="inner">Giá: <br> <input type="number" name="product_price" placeholder="VNĐ" required></div>
            <input type="submit" value="Thêm sản phẩm" class="btn" name="add_product">
        </form>
    </div>

</body>

</html>