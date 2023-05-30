<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header('Location:http://localhost/admin_cf/views/view_account/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- link fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-6.4.0/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/backend_panel.css">
</head>

<body>
    <?php
    switch ($_SESSION['role']) {
        case "manager":
    ?>
            <div class="container">

                <!-- side-header -->
                <div class="side-header">
                    <!-- brand image -->
                    <div class="brand-img">
                        <img src="assets/image/others/logo.jpg" alt="logo">
                    </div>
                    <!-- display user name -->
                    <div class="user">
                        <h2><?php echo $_SESSION['admin_name']; ?> (Manager)</h2>
                    </div>
                    <!-- logout button -->
                    <div class="logout">
                        <a href="http://localhost/admin_cf/views/view_account/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                </div>

                <!-- side-body -->
                <div class="side-body">
                    <!-- side navbar -->
                    <div class="side-navbar">
                        <ul>
                            <form action="<?php echo dir_root_url; ?>" method="get">
                                <li><button type="submit" name="table" value="order"><i class="fa-solid fa-file-invoice"></i>&nbsp; Order</button></li>
                                <li><button type="submit" name="table" value="coffee"><i class="fa-solid fa-mug-saucer"></i>&nbsp; Coffees</button></li>
                                <li><button type="submit" name="table" value="cake"><i class="fa-solid fa-cookie"></i>&nbsp; Cakes</button></li>
                                <li><button type="submit" name="table" value="account"><i class="fa-solid fa-people-group"></i>&nbsp; Account</button></li>
                                <li><button type="submit" name="table" value="revenue"><i class="fa-solid fa-money-bill"></i>&nbsp; Revenue</button></li>
                            </form>
                        </ul>
                    </div>

                    <!-- side content -->
                    <div class="side-main">
                        <?php
                        switch ($_GET['table']) {
                            case 'order':
                                include 'view_table/table_order.php';
                                break;
                            case 'coffee':
                                include 'view_table/table_coffee.php';
                                break;
                            case 'cake':
                                include 'view_table/table_cake.php';
                                break;
                            case 'account':
                                include 'view_table/table_account.php';
                                break;
                            case 'revenue':
                                include 'view_table/table_revenue.php';
                                break;
                        }
                        ?>
                    </div>
                </div>

            </div>
        <?php
            break;

        case "employee":
        ?>
            <div class="container">

                <!-- side-header -->
                <div class="side-header">
                    <!-- brand image -->
                    <div class="brand-img">
                        <img src="assets/image/others/logo.jpg" alt="logo">
                    </div>
                    <!-- display user name -->
                    <div class="user">
                        <h2><?php echo $_SESSION['admin_name']; ?> (Employee)</h2>
                    </div>
                    <!-- logout button -->
                    <div class="logout">
                        <a href="http://localhost/admin_cf/views/view_account/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                </div>

                <!-- side-body -->
                <div class="side-body">
                    <!-- side navbar -->
                    <div class="side-navbar">
                        <ul>
                            <form action="<?php echo dir_root_url; ?>" method="get">
                                <li><button type="submit" name="table" value="order"><i class="fa-solid fa-file-invoice"></i>&nbsp; Order</button></li>
                                <li><button type="submit" name="table" value="coffee"><i class="fa-solid fa-mug-saucer"></i>&nbsp; Coffees</button></li>
                                <li><button type="submit" name="table" value="cake"><i class="fa-solid fa-cookie"></i>&nbsp; Cakes</button></li>
                            </form>
                        </ul>
                    </div>

                    <!-- side content -->
                    <div class="side-main">
                        <?php
                        switch ($_GET['table']) {
                            case 'order':
                                include 'view_table/table_order.php';
                                break;
                            case 'coffee':
                                include 'view_table/table_coffee.php';
                                break;
                            case 'cake':
                                include 'view_table/table_cake.php';
                                break;
                        }
                        ?>
                    </div>
                </div>
            </div>
    <?php
        break;
    }
    ?>

</body>

</html>