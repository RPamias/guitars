<div class="container mt-5 mb-3">
    <div class="row">
        <?php
        foreach ($listaarticulos as $articulo) {
        ?>
            <div class="col-2">
                <div class="card" style="margin-bottom:0.25rem">
                    <a href="?controller=Articulo&action=detail"><img class="card-img-top" src="img/<?= $articulo->getImg() ?>" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $articulo->getNombre() ?></h5>
                        <p class="card-text"><?= $articulo->getDescripcion() ?></p>
                    </div>

                    <div class="card-footer text-muted">
                        <a href="#" class="btn btn-primary"><?= $articulo->getPrecio()?></a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
  
