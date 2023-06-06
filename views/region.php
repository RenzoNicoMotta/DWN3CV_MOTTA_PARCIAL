<?php


$titulo = ucwords($pkmseleccionado);

$pokes = new Pokemon();
$pokemons = $pokes->region_pkm($pkmseleccionado);

?>
<div class=" d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold fs-3 fs-md-1">Nuestro Catálogo de Pokemons De la Region De <?= $titulo ?></h1>

        <div class="container">
            <?php if (!empty($pokemons)) { ?>
                <div class="row">
                    <?php foreach ($pokemons as $pokemon) { ?>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img id="pkmfoto" src="img/Pokemons/<?= $pokemon->getFoto() ?>" class="card-img-top" alt="Foto de <?= $pokemon->getNombre(); ?> - Pokemon #<?= $pokemon->getNumpkdx(); ?>">
                                <div class="card-body">
                                    <p class="fs-6 m-0 fw-bold">Pokemon nº<?= $pokemon->getNumpkdx() ?></p>
                                    <h2 class="card-title"><?= $pokemon->getNombre() ?></h2>
                                    <p class="card-text"><?= $pokemon->recortar_palabras() ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="fw-bold">Tipo:</span> <?= $pokemon->getTipo() ?> <?= $pokemon->getTipo2() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Región:</span> <?= $pokemon->getRegion() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Peso:</span> <?= $pokemon->getPeso() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Altura:</span> <?= $pokemon->getAltura() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Habilidad:</span> <?= $pokemon->getHabilidad() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Habilidad Oculta:</span> <?= $pokemon->getHabilidadoculta() ?></li>
                                </ul>
                                <div class="card-body">
                                    <div class="fs-5 mb-3 fw-bold text-center text-danger">$<?= $pokemon->precio_formateado() ?></div>
                                    <a href="index.php?sec=pokemon&id=<?= $pokemon->getNumpkdx() ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-12 text-danger text-center h1">NO SE ENCONTRARON POKEMONES</div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>