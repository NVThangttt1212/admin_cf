<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Product</title>

    <!-- link fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-6.4.0/css/all.min.css">
</head>

<style>
    .wrapper_product {
        margin-left: -28px;
    }

    .top {
        display: flex;
        margin: 24px;

    }

    .top form {
        display: block;
        margin: 0 80px ;
    }

    table {
        width: 95%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    th,
    td {
        padding: 8px;

    }
</style>

<body>
    <div class="wrapper_product">
        <div class="top">
            <form action="" method="post" style="margin-left:8px;">
                <input style="padding:12px 80px 12px 12px" type="text" name="product_name" placeholder="Nhập thời gian">
                <input style="padding:12px; width:88px;" type="submit" name="search" value="Tìm">
            </form>
            <h1 style="color: var(--color-begie);"><i class="fa-solid fa-money-bill"></i>&nbsp; Revenue Management</h1>
        </div>

        <div class="mid">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th >Thời gian</th>
                    <th >Doanh thu (VNĐ)</th>
                </tr>

                <?php
                // var_dump($total_revenue);
                

                ?>
                <tr>
                    <td>2023-05-15</td>
                    <td>7300000</td>
                </tr>
                <tr>
                    <td>2023-05-16</td>
                    <td>7000000</td>
                </tr>
                <tr>
                    <td>2023-05-17</td>
                    <td>6500000</td>
                </tr>

            </table>
        </div>
    </div>


</body>

</html>