<?php
include("header.php");

if( !empty($_REQUEST) ){
  $_SESSION['variable_3'][] = $_REQUEST;
}
$producto_audifonos = new Producto($id = "1", $nombre = "Audifonos", $sku = "EA-001", $precio = 905000, $peso = 500, $tipo = "no se");
$producto_arroz = new Producto($id = "2", $nombre = "Arroz", $sku = "WE-001", $precio = 200, $peso = 20, $tipo = "no se");
$producto_medias = new Producto($id = "3", $nombre = "Medias", $sku = "SP-001", $precio = 15999, $peso = 35, $tipo = "no se");
?>
<section>
    <div class="container-fluid">
        <div class="container">
            <div class="row pt-5">
                <div class="product col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <img src="src/images/audifonos.jfif" class="card-img-top" alt="...">
                            <h5 class="card-title"><?php echo $producto_audifonos->nombre; ?></h5>
                            <p class="card-text"><?php echo ("Precio: " . $producto_audifonos->precio); ?></p>
                            <p class="card-text"><?php echo $producto_audifonos->sku; ?></p>
                            <div class="d-grid gap-2">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                                    <input type="hidden" name="nombre"
                                        value="<?php echo $producto_audifonos->nombre; ?>">
                                    <input type="hidden" name="precio"
                                        value="<?php echo $producto_audifonos->precio ?>">
                                    <input type="hidden" name="sku" value="<?php echo $producto_audifonos->sku; ?>">
                                    <button class="btn btn-primary" type="submit" id="audifonos" value="holaaa">Agregar al carrito</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product col-lg-4">
                    <div class="product col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img src="src/images/arroz.jfif" class="card-img-top" alt="...">
                                <h5 class="card-title"><?php echo $producto_arroz->nombre; ?></h5>
                                <p class="card-text"><?php echo ("Precio: " . $producto_arroz->precio); ?></p>
                                <p class="card-text"><?php echo $producto_arroz->sku; ?></p>
                                <div class="d-grid gap-2">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                                        <input type="hidden" name="nombre" value="<?php echo ($producto_arroz->nombre); ?>">
                                        <input type="hidden" name="precio"
                                            value="<?php echo $producto_arroz->precio ?>">
                                        <input type="hidden" name="sku" value="<?php echo $producto_arroz->sku; ?>">
                                        <button class="btn btn-primary" type="submit" id="arroz" value="">Agregar al
                                            carrito</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product col-lg-4">
                    <div class="product col-lg-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <img src="src/images/medias.jfif" class="card-img-top" alt="...">
                                <h5 class="card-title"><?php echo $producto_medias->nombre; ?></h5>
                                <p class="card-text"><?php echo ("Precio: " . $producto_medias->precio); ?></p>
                                <p class="card-text"><?php echo $producto_medias->sku; ?></p>
                                <div class="d-grid gap-2">
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                                        <input type="hidden" name="nombre"
                                            value="<?php echo $producto_medias->nombre; ?>">
                                        <input type="hidden" name="precio"
                                            value="<?php echo $producto_medias->precio ?>">
                                        <input type="hidden" name="sku" value="<?php echo $producto_medias->sku; ?>">
                                        <button class="btn btn-primary" type="submit" id="medias" value="holaaa">Agregar
                                            al
                                            carrito</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')
myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
})
</script>