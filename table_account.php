<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <!-- link fontawesome -->
    <link rel="stylesheet" href="assets/fonts/fontawesome-6.4.0/css/all.min.css">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/table_css/table_account.css">
</head>

<body>
    <div class="wrapper_product">
        <div class="top">
            <form action="" method="post" style="margin-left:8px;">
                <input style="padding:12px 80px 12px 12px" type="text" name="name" placeholder="Tên người dùng">
                <input style="padding:12px; width:88px;" type="submit" name="search_user" value="Tìm">
            </form>
            <h1 style="color: var(--color-begie);"><i class="fa-solid fa-people-group"></i>&nbsp; Account</h1>
            <a href="views/view_account/register.php" style="text-decoration:none; background-color: brown; color: aqua; padding: 12px; border-radius: 5px; margin-right:1%">Đăng ký tài khoản</a>
        </div>

        <div class="mid">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th style="width:3%">ID</th>
                    <th style="width:10%">Tên người dùng</th>
                    <th style="width:15%">Email (account đăng nhập)</th>
                    <th style="width:30%">Mật khẩu</th>
                    <th style="width:10%">Chức vụ</th>
                    <th style="width:10%">Tùy chỉnh</th>
                </tr>

                <?php
                // Search user by name
                if (isset($_POST['search_user'])) {
                    $name = $_POST['name'];
                    User::searchUser($name);
                }
                // show list account user
                User::showUsers();
                ?>

            </table>
        </div>
    </div>
</body>

</html>