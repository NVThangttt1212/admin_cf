<?php
session_start();
session_unset();
session_destroy();

header('Location:http://localhost/admin_cf/views/view_account/login.php');