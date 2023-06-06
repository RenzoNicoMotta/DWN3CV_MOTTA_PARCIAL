<?php

/**
 * todos los param de pokemon
 */
class Pokemon
{
    private $nombre;
    private $numpkdx;
    private $altura;
    private $peso;
    private $region;
    private $tipo;
    private $tipo2;
    private $descripcion;
    private $habilidad;
    private $habilidadoculta;
    private $foto;
    private $precio;
    private $hp;
    private $atk;
    private $def;
    private $spatk;
    private $spdef;
    private $vel;
    private $total;

    /**
     * Devuelve todos los pkm
     * @return array un array de objetos pkm
     */
    public function todos_pokes(): array
    {
        $pokemons = [];

        $JSON = file_get_contents('datos/pokemons.json');
        $JSONData = json_decode($JSON);

        foreach ($JSONData as $pkm) {

            $pokemon = new self();

            $pokemon->nombre = $pkm->nombre;
            $pokemon->tipo = $pkm->tipo;
            $pokemon->tipo2 = $pkm->tipo2;
            $pokemon->numpkdx = $pkm->numpkdx;
            $pokemon->altura = $pkm->altura;
            $pokemon->peso = $pkm->peso;
            $pokemon->region = $pkm->region;
            $pokemon->descripcion = $pkm->descripcion;
            $pokemon->habilidad = $pkm->habilidad;
            $pokemon->habilidadoculta = $pkm->habilidadoculta;
            $pokemon->foto = $pkm->foto;
            $pokemon->precio = $pkm->precio;
            $pokemon->hp = $pkm->hp;
            $pokemon->atk = $pkm->atk;
            $pokemon->def = $pkm->def;
            $pokemon->spatk = $pkm->spatk;
            $pokemon->spdef = $pkm->spdef;
            $pokemon->vel = $pkm->vel;
            $pokemon->total = $pkm->total;

            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }
    /**
     * Devuelve pokemons segun sus tipos
     * @param string $tipo tipo del pkm
     * @return array array con los pokemon de ese tipo
     */
    public function tipos_pkm(string $tipo): array
    {

        $resultado = [];
        $pokemons = $this->todos_pokes();
        foreach ($pokemons as $t) {
            if ($t->tipo == $tipo) {
                $resultado[] = $t;
            }
        }
        return $resultado;
    }

    /**
     * Devuelve pokemon segun su region
     * @param string $region region del pokemon
     * @return array array con pokemons de esa region
     */
    public function region_pkm(string $region): array
    {

        $resultado = [];
        $pkms = $this->todos_pokes();

        foreach ($pkms as $r) {
            if ($r->region == $region) {
                $resultado[] = $r;
            }
        }

        return $resultado;
    }


    public
    /**
     * Summary of pkm_x_pkdx
     * @param int $numpkm num de pokemon en la pokedex
     * @return mixed array con el pokemon con numero de pokedex o null si no existe
     */
    function pkm_x_pkdx(int $numpkm): mixed
    {
        $pkms = $this->todos_pokes();
        foreach ($pkms as $t) {
            if ($t->numpkdx == $numpkm) {
                return $t;
            }
        }
        return null;
    }

    public function precio_formateado(): string
    {
        return number_format($this->precio, 2, ",", ".");
    }

    /**
     * Devuelve la cantidad deseada de palabras
     * @param string $texto Texto a reducir
     * @param int $cantidad Cantidad de palabras con las que queda
     * 
     * @return string Texto con la cantidad de palabras deseado con un ... al final si se pasa
     */
    public function recortar_palabras(int $cantidad = 30): string
    {
        $texto = $this->descripcion;

        $array = explode(" ", $texto);
        if (count($array) <= $cantidad) {
            $resultado = $texto;
        } else {
            array_splice($array, $cantidad);
            $resultado = implode(" ", $array) . "...";
        }
        return $resultado;
    }


    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of numpkdx
     */
    public function getNumpkdx()
    {
        return $this->numpkdx;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Get the value of region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get the value of tipo2
     */
    public function getTipo2()
    {
        return $this->tipo2;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of habilidad
     */
    public function getHabilidad()
    {
        return $this->habilidad;
    }

    /**
     * Get the value of habilidadoculta
     */
    public function getHabilidadoculta()
    {
        return $this->habilidadoculta;
    }

    /**
     * Get the value of foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of hp
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Get the value of atk
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * Get the value of def
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Get the value of spatk
     */
    public function getSpatk()
    {
        return $this->spatk;
    }

    /**
     * Get the value of spdef
     */
    public function getSpdef()
    {
        return $this->spdef;
    }

    /**
     * Get the value of vel
     */
    public function getVel()
    {
        return $this->vel;
    }
    public function getTotal()
    {
        return $this->total;
    }
};
