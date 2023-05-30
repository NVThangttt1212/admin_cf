<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/table_css/table_order.css">

</head>

<body>
    <div class="wrapper">
        <div class="top">
            <h1 style="color: var(--color-begie);"><i class="fa-solid fa-file-invoice"></i>&nbsp; Being Ordered</h1>
        </div>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th style="width:3%">Bàn</th>
                <th style="width:15%">Sẩn phẩm</th>
                <th style="width:5%">Thời điểm order</th>
                <th style="width:15%">Ghi chú</th>
                <th style="width:5%">Số điện thoại</th>
                <th style="width:8%">Tổng thanh toán (VNĐ)</th>
                <th style="width:5%">Trạng thái</th>
            </tr>
            <?php
            $result = DB::connect()->query("SELECT * FROM order_customer;");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    $table_number = $row['table_number'];
                    $products_ordered = $row['products_ordered'];
                    $order_time = $row['order_time'];
                    $note = $row['note'];
                    $customer_phone = $row['customer_phone'];
                    $total_payment = $row['total_payment'];

                    echo '
                    <tr>
                        <td>' . $table_number . '</td>
                        <td>' . $products_ordered . '</td>
                        <td>' . $order_time . '</td>
                        <td style="text-align: left">' . $note . '</td>
                        <td>' . $customer_phone . '</td>
                        <td>' . $total_payment . '</td>
                        <form action="" method="post">
                            <td><input class="btn-done" type="submit" value="DONE"></td>
                        </form>
                    </tr>';
                }
            }

            ?>

        </table>
    </div>
  
</body>

</html>