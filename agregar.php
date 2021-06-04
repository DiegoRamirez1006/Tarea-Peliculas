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

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

include('view2.php');
include('DB.php');
include('peliculas.php');

$name = $_POST["nombre"];
$img = $_POST["img"];
$insertar = "INSERT INTO peliculas(nombre, img) VALUES ('$name', '$img')";
$resultado = mysqli_query($conn, $insertar);




$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'phpmailerprueba4@gmail.com';                     //SMTP username
    $mail->Password   = 'phpmailertest135';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('phpmailerprueba4@gmail.com', 'LucasMailer');
    $mail->addAddress('phpmailerprueba4@gmail.com', "");     


    $mail->isHTML(true);                                  
    $mail->Subject = 'Info pelicula';
    $mail->Body    .=  "Pelicula: ";
    $mail->Body    .=  $name;
    $mail->Body    .= " | ";
    $mail->Body    .=  "Imagen: ";
    $mail->Body    .=  $img;


    $mail->send();
    echo 'Correo enviado exitosamente.';
} catch (Exception $e) {
    echo "Ha ocurrido un error.", $mail->ErrorInfo;
}
?>