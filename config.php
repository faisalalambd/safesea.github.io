<?php

$server_name        =   "localhost";
$user_name          =   "srsomgcd_safesea_admin";
$user_password      =   "123@jAmifree";
$database_name      =   "srsomgcd_safesea";

$conn = mysqli_connect($server_name, $user_name, $user_password, $database_name);

if ($conn) {

    // echo "Connected!";

} else {

    echo "Connection Failed!" . mysqli_connect_error();
}
