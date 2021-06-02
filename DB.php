<?php
$servername = "localhost";
$database = "peliculas";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    mysqli_select_db($conn,'peliculas');
}

?>