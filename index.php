<?PHP
require_once "classes/Pkm.php";
require_once "funciones.php";
$pkmseleccionado = $_GET['pkm'] ?? FALSE;
$fondo = obtenerFondo($pkmseleccionado);



$secciones_validas = [
    "home" => [
        "titulo" => "Bienvenidos Entrenadores"
    ],
    "envios" => [
        "titulo" => "Envios Pokemon"
    ],
    "quienes_somos" => [
        "titulo" => "¿Quienes somos?"
    ],
    "tipo" => [
        "titulo" => "Nuestros Pokemons"
    ],
    "pokemon" => [
        "titulo" => "Pokemons"
    ],
    "region" => [
        "titulo" => "Pokemons"
    ],
    "todospokemons" => [
        "titulo" => "Pokemons"
    ],
    "datos_alumno" => [
        "titulo" => "Alumno"
    ]
];


$seccion = $_GET['sec'] ?? "home";


if (!array_key_exists($seccion, $secciones_validas)) {
    $vista = "404";
    $titulo = "404 - Pagina no encontrada";
} else {
    $vista = $seccion;
    $titulo = $secciones_validas[$seccion]['titulo'];
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $titulo ?>
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="css/styles.css" rel="stylesheet">
</head>

<body class="<?php echo $fondo ?>">

    <nav class="navbar navbar-expand-lg navbar-light bg-light general">
        <div class="container-fluid general">
            <a class="navbar-brand" href="index.php?sec=home">PokeTienda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?sec=home">Home</a>
                    </li>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle mx-2" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sobre Nosotros
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="index.php?sec=quienes_somos">Nosotros</a>
                        <a class="dropdown-item" href="index.php?sec=datos_alumno">Datos De Entrenador</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?sec=todospokemons&pkm=Todos">Pokemons</a>
                    </li>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle mx-2" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Regiones
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Kanto">Kanto</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Johto">Johto</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Hoenn">Hoenn</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Sinnoh">Sinnoh</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Unova">Unova</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Kalos">Kalos</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Alola">Alola</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Galar">Galar</a>
                            <a class="dropdown-item" href="index.php?sec=region&pkm=Paldea">Paldea</a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle mx-2" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tipos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="index.php?sec=tipo&pkm=Agua">Agua</a>
                            <a class="dropdown-item" href="index.php?sec=tipo&pkm=Planta">Planta</a>
                            <a class="dropdown-item" href="index.php?sec=tipo&pkm=Fuego">Fuego</a>
                        </div>
                    </div>

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php?sec=envios">Envios</a>
                    </li>
                </ul>
            </div>
        </div>
        

    </nav>

    <main>

        <?PHP

        require_once file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";

        ?>
    </main>

    <footer class="bg-secondary text-light text-center">
        Renzo Nicolas Motta 2023
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

</body>

</html>