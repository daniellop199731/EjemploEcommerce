<!DOCTYPE html>
<html lang="en">

<?php
include("src/clases/Producto.php");

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link href="src/font-awesome/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <title>Document</title>
</head>

<?php

$producto_audifonos = new Producto($id = "1", $nombre = "Audifonos", $sku = "EA-001", $precio = 905000, $peso = 500, $tipo = "no se",);
$producto_arroz = new Producto($id = "2", $nombre = "Arroz", $sku = "WE-001", $precio = 200, $peso = 20, $tipo = "no se",);
$producto_medias = new Producto($id = "3", $nombre = "Medias", $sku = "SP-001", $precio = 15999, $peso = 35, $tipo = "no se",);
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0d6efd;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: #FFF;" href="#">Ejemplo Ecommerce</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-shopping-cart"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

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
                                    <button class="btn btn-primary" type="button" id="audifonos">Agregar al carrito</button>
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
                                        <button class="btn btn-primary" type="button" id="arroz">Agregar al carrito</button>
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
                                        <button class="btn btn-primary" type="button" id="medias">Agregar al carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<script>
var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function() {
    myInput.focus()
})

</script>

</html>