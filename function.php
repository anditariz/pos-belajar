<?php 
// untuk koneksi
$host_connection = "localhost";
$host_username = "root";
$host_password = "";
$host_database = "pos-kasir";

$c = mysqli_connect("localhost", "root", "", "pos-kasir");
if (!$c) {
    echo "Connection Failed";
}

// login
?>