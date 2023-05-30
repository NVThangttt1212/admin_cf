<?php
include 'header_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1 class="mt-2">GIỎ HÀNG</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá (VNĐ)</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng cộng (VNĐ)</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr=$key+1;
                                $total += ($value['price']*$value['quantity']);
                                echo '
                                <tr>
                                    <td>'.$sr.'</td>
                                    <td>' . $value['product_name'] . '</td>
                                    <td>' . $value['price'] . '</td>
                                    <td><input class="text-center" type="number" min="1" value="' . $value['quantity'] . '"></td>
                                    <td>'.($value['price']*$value['quantity']).'</td>
                                    <td>
                                    <form action="../../controllers/handle_cart.php" method="POST">
                                        <button type="submit" name="remove_item" class="btn btn-sm btn-outline-danger">XÓA</button>
                                        <input type="hidden" name="product_name" value="'.$value['product_name'].'">
                                    </form>
                                    </td>
                                </tr>
                                ';
                            }
                        } else {
                            echo '<td colspan="4"><h1 class="text-center" col=4>Không có sản phẩm nào!</h1></td>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Tổng số tiền:</h4>
                    <h5 class="text-center"><?php echo $total; ?></h5>
                    <br>
                    <a href="payment.php">
                        <button type="submit" class="btn btn-primary btn-block col-lg-12">Thanh toán</button>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>