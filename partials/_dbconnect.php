<?php
$server = "127.0.0.1:3307";
$username = "root";
$password = "";
$database = "users18";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn) {
    //echo "success";
//}
//else{
    die("Error". mysqli_connect_error());
}

?>