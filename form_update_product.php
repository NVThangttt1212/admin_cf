<?php
require_once '../../constant.php';
require_once dir_root . '/config/database.php';

// get data from product was selected
$product_id = $_GET['updateid'];

$sql = "SELECT * FROM product WHERE `product_id`='$product_id'";
$result = DB::connect()->query($sql);
$row = $result->fetch_assoc();

$product_name = $row['product_name'];
$category_id = $row['category_id'];
$product_img = $row['product_img'];
$product_desc = $row['product_desc'];
$product_price = $row['product_price'];
// var_dump($category_id);die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Update Data</title>
    <!-- link css -->
    <link rel="stylesheet" href="../../assets/css/form_css/form_add_product.css">
</head>

<body>
    <div class="wrapper">
        <form class="form-class" action="<?php echo dir_root_url ?>" method="post" enctype="multipart/form-data">
            <h2 class="heading">Thông tin sản phẩm cập nhật</h2>
            <div class="inner">ID sản phẩm: <br> <input type="number" name="product_id" value="<?php echo $product_id; ?>"></div>
            <div class="inner">Tên sản phẩm: <br> <input type="text" name="product_name" value="<?php echo $product_name; ?>"></div>
            <div class="radio-class">Loại: <br>

                <?php
                if ($category_id == "1") {
                    echo '<div><input type="radio" name="category_id" value="1" checked> Coffee</div>
                        <div><input type="radio" name="category_id" value="2"> Cake</div>';
                } elseif ($category_id == "2") {
                    echo '<div><input type="radio" name="category_id" value="1"> Coffee</div>
                        <div><input type="radio" name="category_id" value="2" checked> Cake</div>';
                }
                ?>               
            </div>
            <div class="inner">Ảnh sản phẩm: <br> <input type="file" name="product_img" value="<?php echo $product_img; ?>"></div>
            <div class="inner">Mô tả: <br> <textarea name="product_desc" rows="8" cols="50"><?php echo $product_desc; ?></textarea></div>
            <div class="inner">Giá: <br> <input type="number" name="product_price" placeholder="VNĐ" value="<?php echo $product_price; ?>"></div>
            <input type="submit" value="Cập nhật sản phẩm" class="btn" name="update_product">
        </form>
    </div>

</body>

</html>