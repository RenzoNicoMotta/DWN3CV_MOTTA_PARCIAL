<?php
$idPokemon = $_GET['id'] ?? FALSE;
$pokes = new Pokemon();
$pokemon = $pokes->pkm_x_pkdx($idPokemon);

?>
<div class=" d-flex justify-content-center p-5">
    <div>
        <div class="container" id="pkcontainer">

            <div class="row">

                <?PHP if (!empty($idPokemon)) { ?>
                    <h1 class="text-center mb-5 fw-bold fs-3 fs-md-1"> !El Pokemon Que Buscabas! </h1>
                    <div class="col">
                        <div class="card mb-5" id="pokemon-card">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="img/portada/<?= $pokemon->getFoto(); ?>" class="img-fluid rounded-start border-end" alt="Foto de <?= $pokemon->getNombre(); ?> #<?= $pokemon->getNumpkdx(); ?>">
                                </div>
                                <div class="col-md-7 d-flex flex-column p-3">
                                    <div class="card-body flex-grow-0">
                                        <h2 class="card-title fs-2 mb-4"><?= $pokemon->getNombre(); ?> #<?= $pokemon->getNumpkdx(); ?> </h2>
                                        <p class="card-text"><?= $pokemon->getDescripcion() ?></p>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="fw-bold">Tipo: </span> <?= $pokemon->getTipo(); ?> <?= $pokemon->getTipo2(); ?>
                                        <li class="list-group-item "><span class="fw-bold">Habilidad: </span> <?= $pokemon->getHabilidad(); ?> </li>
                                        <li class="list-group-item "><span class="fw-bold">Habilidad Oculta: </span> <?= $pokemon->getHabilidadoculta(); ?></li>
                                        <li class="list-group-item stat-container">
                                            <div class="fw-bold stat-name">HP </div>
                                            <div class="barhp" style="width: <?= $pokemon->getHp() ?>px;"></div><?= $pokemon->getHp() ?>
                                        </li>
                                        <li class="list-group-item stat-container">
                                            <div class="fw-bold stat-name">ATK </div>
                                            <div class="baratk" style="width: <?= $pokemon->getAtk() ?>px;"></div><?= $pokemon->getAtk() ?>
                                        </li>
                                        <li class="list-group-item stat-container">
                                            <div class="fw-bold stat-name">DEF </div>
                                            <div class="bardef" style="width: <?= $pokemon->getDef() ?>px;"></div><?= $pokemon->getDef() ?>
                                        </li>
                                        <li class="list-group-item stat-container">
                                            <div class="fw-bold stat-name">SP.ATK </div>
                                            <div class="barspatk" style="width: <?= $pokemon->getSpatk() ?>px;"></div><?= $pokemon->getSpatk() ?>
                                        </li>
                                        <li class="list-group-item stat-container">
                                            <div class="fw-bold stat-name">SP.DEF </div>
                                            <div class="barspdef" style="width: <?= $pokemon->getSpdef() ?>px;"></div><?= $pokemon->getSpdef() ?>
                                        </li>
                                        <li class="list-group-item stat-container">
                                            <div class="fw-bold stat-name">VEL </div>
                                            <div class="barvel" style="width: <?= $pokemon->getVel() ?>px;"></div><?= $pokemon->getVel() ?>
                                        </li>
                                        <li class="list-group-item"><span class="fw-bold">TOTAL </span> <?= $pokemon->getTotal() ?></li>
                                    </ul>

                                    <div class="card-body flex-grow-0 mt-auto">
                                        <div class="fs-3 mb-3 fw-bold text-center text-danger">$<?= $pokemon->precio_formateado(); ?></div>
                                        <a href="#" class="btn btn-danger w-100 fw-bold">COMPRAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>




                <?PHP } else { ?>
                    <div class="col">
                        <h2 class="text-center m-5">No se encontró el Pokemon deseado.</h2>
                    </div>
                <?PHP } ?>



            </div>
        </div>

    </div>
</div>