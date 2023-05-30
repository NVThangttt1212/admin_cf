<?php
session_start();
require '../../constant.php';
// require dir_root . '/controllers/handle_product.php';
require dir_root . '/config/database.php';
require dir_root . '/models/product.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <form style="margin-left: 578px;" action="menu_product.php" method="get" class="mt-4">
                            <button name="list" value="coffee_list" style="min-width: 150px; margin: 0 10px" type="submit" class="btn btn-warning   ">Coffee List</button>
                            <button name="list" value="cake_list" style="min-width: 150px; margin: 0 10px" type="submit" class="btn btn-warning ">Cake List</button>
                        </form>
                    </li>
                </ul>
                <div>
                    <?php
                    $total_quantity = 0;
                    if(isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $item) {
                            $total_quantity += $item['quantity'];
                        }
                    }
                    ?>
                    <a href="my_cart.php" class="btn btn-outline-success">My Cart (<?php echo $total_quantity; ?>)</a>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>