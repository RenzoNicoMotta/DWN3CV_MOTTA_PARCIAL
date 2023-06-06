<?php

$titulo = ucwords($pkmseleccionado);

$pokes = new Pokemon();
$pokemons = $pokes->tipos_pkm($pkmseleccionado);
?>

<div class=" d-flex justify-content-center p-5">
    <div>
        <h1 class="text-center mb-5 fw-bold fs-3 fs-md-1">Nuestro Catálogo de Pokemons Tipo <?= $titulo ?></h1>

        <div class="container">
            <?php if (!empty($pokes)) { ?>
                <div class="row">
                    <?php foreach ($pokemons as $dato) { ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <div class="card">
                                <img id="pkmfoto" src="img/Pokemons/<?= $dato->getFoto() ?>" class="card-img-top" alt="Foto de <?= $dato->getNombre(); ?> Pokemon:<?= $dato->getNombre(); ?> #<?= $dato->getnumpkdx(); ?>">
                                <div class="card-body">
                                    <p class="fs-6 m-0 fw-bold">Pokemon nº<?= $dato->getNumpkdx() ?></p>
                                    <h2 class="card-title"><?= $dato->getNombre() ?></h2>
                                    <p class="card-text"><?= $dato->recortar_palabras() ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="fw-bold">Tipo:</span> <?= $dato->getTipo() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Region:</span> <?= $dato->getRegion() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Peso:</span> <?= $dato->getPeso() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Altura:</span> <?= $dato->getAltura() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Habilidad:</span> <?= $dato->getHabilidad() ?></li>
                                    <li class="list-group-item"><span class="fw-bold">Habilidad Oculta:</span> <?= $dato->getHabilidadoculta() ?></li>
                                </ul>
                                <div class="card-body">
                                    <div class="fs-5 mb-3 fw-bold text-center text-danger">$<?= $dato->precio_formateado() ?></div>
                                    <a href="index.php?sec=pokemon&id=<?= $dato->getNumpkdx() ?>" class="btn btn-danger w-100 fw-bold card-btn">VER MAS</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-12 text-danger text-center h1">NO SE ENCONTRARON POKEMONS DE ESE TIPO</div>
                </div>
            <?php } ?>
        </div>



    </div>
</div>