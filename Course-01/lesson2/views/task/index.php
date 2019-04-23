<h1>Hello Task</h1>

<?php
$host = 'localhost';
$database = 'admin_db_geek';
$user = 'admin_serg';
$password = '111111';


$link = mysqli_connect($host, $user, $password, $database);
print_r($link);
?>