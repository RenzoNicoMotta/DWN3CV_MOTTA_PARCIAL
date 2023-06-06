<?PHP
function obtenerFondo($fondo)
{
    switch ($fondo) {
        case "Planta":
            $imagen = "fondo-planta";
            break;
        case "Agua":
            $imagen = "fondo-agua";
            break;
        case "Fuego":
            $imagen = "fondo-fuego";
            break;
        case "Kanto":
            $imagen = "fondo-Kanto";
            break;
        case "Johto":
            $imagen = "fondo-johto";
            break;
        case "Hoenn":
            $imagen = "fondo-hoenn";
            break;
        case "Sinnoh":
            $imagen = "fondo-sinnoh";
            break;
        case "Unova":
            $imagen = "fondo-unova";
            break;
        case "Kalos":
            $imagen = "fondo-kalos";
            break;
        case "Alola":
            $imagen = "fondo-alola";
            break;
        case "Galar":
            $imagen = "fondo-galar";
            break;
        case "Paldea":
            $imagen = "fondo-paldea";
            break;
            case "Todos":
                $imagen = "fondo-todos";
                break;
            default: $imagen = false;
    }
    return $imagen;
}
