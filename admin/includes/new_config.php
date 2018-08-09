<?php
/**
 * Created at:
 * Date: 08.08.2018
 * Time: 23:14
 */

//database connection constants

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'gallery2_db');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connection) {
    echo "connection to database is ok";
}