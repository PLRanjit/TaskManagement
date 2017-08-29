<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'tms');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to mysqli: " . mysqli_error());
$db=mysqli_select_db(DB_NAME,$con) or die("Failed to connect to mysqli: " . mysqli_error());
?>