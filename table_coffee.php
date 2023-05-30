<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Product</title>

    <!-- link fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-6.4.0/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/table_css/product.css">
</head>

<body>
    <div class="wrapper_product">
        <div class="top">
            <form action="" method="post" style="margin-left:8px;">
                <input style="padding:12px 80px 12px 12px" type="text" name="product_name" placeholder="Tên sản phẩm">
                <input style="padding:12px; width:88px;" type="submit" name="search" value="Tìm">
            </form>
            <h1 style="color: var(--color-begie);"><i class="fa-solid fa-mug-saucer"></i>&nbsp; Coffee</h1>
            <a href="views/view_form/form_add_product.php" style="text-decoration:none; background-color: brown; color: aqua; padding: 12px; border-radius: 5px; margin-right:4px">Thêm sản phẩm</a>
        </div>

        <div class="mid">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th style="width:5%">ID</th>
                    <th style="width:10%">Tên sản phẩm</th>
                    <th style="width:15%">Ảnh</th>
                    <th style="width:50%">Mô tả</th>
                    <th style="width:10%">Giá (VNĐ)</th>
                    <th style="width:10%">Tùy chỉnh</th>
                </tr>
                <?php
                // initialize object
                $product = new Product();
                $products = $product->getAllProducts();

                // show product to table
                if (!empty($products)) {
                    foreach ($products as $product) {
                        if ($product['category_id'] == "1") {
                            $product_id = $product['product_id'];
                            $product_name = $product['product_name'];
                            $product_img = $product['product_img'];
                            $product_desc = $product['product_desc'];
                            $product_price = $product['product_price'];

                            // search product to table
                            if (isset($_POST['search'])) {
                                if (empty($_POST['product_name'])) {
                                    echo '<td colspan="6"><h1>Bạn chưa nhập tên sản phẩm!</h1></td>';
                                    die();
                                } else {
                                    if (strtolower($product_name) == strtolower($_POST['product_name'])) {
                                        echo '<tr>
                                                <td>' . $product_id . '</td>
                                                <td>' . $product_name . '</td>
                                                <td><img src="' . dir_root_url . $product_img . '" width="100" height="100"></td>
                                                <td style="text-align: left">' . $product_desc . '</td>
                                                <td>' . $product_price . '</td>
                                                <td>
                                                    <a href="views/view_table/form_update_product.php?updateid=' . $product_id . '"><input type="submit" style="color: blue ;width: 80px; height:28px; margin-bottom:5px" name="update_product" value="Cập nhật"></a>
                                                    <br>
                                                    <a onclick="return confirm(\'Bạn muốn xóa ' . $product_name . '?\');" href="index.php?deleteid=' . $product_id . '"><input type="submit" style="color: red ;width: 80px; height:28px; margin-bottom:5px" name="delete_product" value="Xóa"></a>
                                                </td>
                                            </tr>
                                            <a href="http://localhost/admin_cf/?table=coffee"><i class="fa-solid fa-house" style="font-size: 30px; margin: 10px 0 10px 34px"></i></a>';                                        
                                    }
                                }
                            } else {
                                // show coffee list
                                echo '<tr>
                                        <td>' . $product_id . '</td>
                                        <td>' . $product_name . '</td>
                                        <td><img src="' . dir_root_url . $product_img . '" width="100" height="100"></td>
                                        <td style="text-align: left">' . $product_desc . '</td>
                                        <td>' . $product_price . '</td>
                                        <td>
                                            <a href="views/view_form/form_update_product.php?updateid=' . $product_id . '"><input type="submit" style="color: blue ;width: 80px; height:28px; margin-bottom:5px" name="update_product" value="Cập nhật"></a>
                                            <br>
                                            <a onclick="return confirm(\'Bạn muốn xóa ' . $product_name . '?\');" href="index.php?deleteid=' . $product_id . '"><input type="submit" style="color: red ;width: 80px; height:28px; margin-bottom:5px" name="delete_product" value="Xóa"></a>
                                        </td>
                                    </tr>';
                            }
                        } 
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>