<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
include('DB.php');
include('peliculas.php');
    $name = $_POST["nombre"];
    $img = $_POST["img"];
    $email = "diego.ramirez@anima.edu.uy";
    $header = "From: noreply@example.com" . "\r\n";
    $header.= "Reply-to: noreply@example.com" . "\r\n";
    $header.= "X-Mailer: PHP/" . phpversion();
    $mail = @mail($email, $name, $img, $header);
    $insertar = "INSERT INTO peliculas(nombre, img) VALUES ('$name', '$img')";
    $resultado = mysqli_query($conn, $insertar);
?>