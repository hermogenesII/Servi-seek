<?php
$db_host = 'localhost:3307';
$db_user = 'root';
$db_pass = '';
$db_name = 'serviseek_sample';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    exit('Error connection to the DataBase' . mysqli_connect_error());
}
