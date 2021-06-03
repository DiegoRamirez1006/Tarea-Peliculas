<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
include('DB.php');
include('peliculas.php');
if (isset($_GET["peli"])) {
    $pelii = $_GET["peli"];
    $sql = "SELECT * FROM peliculas WHERE idPelicula = $pelii";
    mysqli_set_charset($conn, "utf8");
    if (!$result = mysqli_query($conn, $sql)) die();
    $peliis = array();

    if ($row = mysqli_fetch_array($result)) {
        $nombre = $row['nombre'];
        $img = $row['img'];
        $activo = $row['activo'];
        $idPelicula = $row['idPelicula'];

        $peliis[] = array('nombre' => $nombre, 'img' => $img, 'activo' => $activo, 'idPelicula' => $idPelicula,);

        $jsonn_string = json_encode($peliis);
        echo "<div style = 'background: #24303c; color:white; text-align: center;'>$jsonn_string; </div>";
        unset($peliis);
    } else {
        echo "No se encontro una pelicula con ese id";
    }
}
?>