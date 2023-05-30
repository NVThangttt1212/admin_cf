<?php
include 'header_cart.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">

        <div class="row">
            <?php
            if (isset($_GET['list'])) {
                switch ($_GET['list']) {
                    case "coffee_list":
                        Product::showProductList(1);
                        break;
                    case "cake_list":
                        Product::showProductList(2);
                        break;
                }
            }else {
                // Mặc định hiển thị coffee_list nếu không có tham số list được truyền vào
                Product::showProductList(1);
            }
            ?>
        </div>
    </div>
</body>

</html>