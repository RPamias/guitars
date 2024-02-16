<div class="card" style="width:400px">
  <img class="card-img-top" src=<?= $articulo->getImg()?> alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?=$articulo->getNombre() ?></h4>
    <p class="card-text"><?=$articulo->getDescripcion() ?></p>
  </div>
</div>