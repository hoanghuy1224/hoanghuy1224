<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "ht_quanli";


// Create connection

$conn =  new mysqli($server, $user, $pass, $database);

// Check connection

if ($conn) {
    // mysqli_query($conn , "SET NAMES 'utf8' ");
    // echo 'kết nối thành công ';
} else {
    echo "kết nối thất bại ";
    mysqli_close($conn);
}
