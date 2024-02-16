<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!--<h1 class="m-0">Añadir artículo</h1>-->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">

    <form action="?controller=Articulo&action=add" method="post">
        <input type="text" name="nombre" placeholder="Nombre"  required/>
        <br>
        <input type="number" name="precio" placeholder="precio" required/>
        <br>
        <textarea  name="descripcion" placeholder="Desc" required></textarea>
        <br>
        <select name="idcategoria">
            <?php foreach($listacategorias as $cat){ ?>
                <option value="<?= $cat->getIdcategoria()?>"><?= $cat->getNombre()?></option>
            <?php } ?> 
        </select>
        <button type="submit">Guardar</button>
    </form>
    </section>
</div>