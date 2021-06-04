<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>peliculas</title>
</head>

<body>
    <header id="main-header">
        <a id="logo-header" onclick="myOcultar()" href="#">
            <span class="site-name">Peliculas</span>
        </a>
        <nav>
            <ul>
                <input id="botonss" onclick="myAgregar()" type="submit" value="Agregar">
                <input id="botonss" onclick="myMostrar()" type="submit" value="Mostrar todas peliculas">
                <input id="botonss" onclick="myMostrarr()" type="submit" value="Mostrar una peliculas">
            </ul>
        </nav>
    </header>
    <form id="form-agendaa" action="agregar.php" method="POST">
        <h1>Agregar una pelicula</h1>
        <input id="controls" name="nombre" placeholder="Ingrese nombre">
        <input id="controls" name="img" placeholder="Ingrese url">
        <input id="botons" type="submit" value="Agregar">
    </form>

    <form id="form-agendaaa" action="view.php" method="GET">
        <h1>Mostrar Todas las peliculas</h1>
        <input id="botons" type="submit" value="Mostras peliculas">
    </form>

    <form id="form-agendaaaa" action="view2.php" method="GET">
        <h1> Mostar una pelicula</h1>
        <input id="controls" name="peli" placeholder="Ingrese id de peliculas">
        <input id="botons" type="submit" value="Mostra peliculas">
    </form>
</body>

</html>

<script>
    function myAgregar() {
        document.getElementById('form-agendaa').style.display = "block";
        document.getElementById('form-agendaaa').style.display = "none";
        document.getElementById('form-agendaaaa').style.display = "none";
    }

    function myMostrar() {
        document.getElementById('form-agendaa').style.display = "none";
        document.getElementById('form-agendaaa').style.display = "block";
        document.getElementById('form-agendaaaa').style.display = "none";
    }

    function myMostrarr() {
        document.getElementById('form-agendaa').style.display = "none";
        document.getElementById('form-agendaaa').style.display = "none";
        document.getElementById('form-agendaaaa').style.display = "block";
    }

    function myOcultar(){
        document.getElementById('form-agendaa').style.display = "none";
        document.getElementById('form-agendaaa').style.display = "none";
        document.getElementById('form-agendaaaa').style.display = "none";
    }
</script>

<?php
include('DB.php');
?>