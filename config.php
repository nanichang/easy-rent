<?php
    define('_AMSCODESECURITY', '16343942');
    define('CURRENCY', '₦');
    define('WEB_URL', 'http://localhost:8000/');
    define('ROOT_PATH', __DIR__."/easy-rent");


    define('DB_HOSTNAME', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'mysql');
    define('DB_DATABASE', 'easy_rent');
    $link = new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
