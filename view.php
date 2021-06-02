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
if (isset($_GET)) {
    $sql = "SELECT * FROM peliculas";
    mysqli_set_charset($conn, "utf8");
    if (!$result = mysqli_query($conn, $sql)) die();
    $pelis = array();

    while ($row = mysqli_fetch_array($result)) {
        $nombre = $row['nombre'];
        $img = $row['img'];
        $activo = $row['activo'];
        $idPelicula = $row['idPelicula'];

        $pelis[] = array('nombre' => $nombre, 'img' => $img, 'activo' => $activo, 'idPelicula' => $idPelicula,);

        $json_string = json_encode($pelis);
        if ($json_string > 0) {
            echo $json_string;
        } else {
            echo 'No hay ninguna pelicula en el sistema.';
        }
    }
}
?>