<?php
require 'constant.php';

require dir_root . '/config/database.php';

require dir_root . '/models/product.php';
require dir_root . '/models/user.php';

require dir_root . '/controllers/handle_product.php';
require dir_root . '/controllers/handle_account.php';

require dir_root . '/views/backend_panel.php';