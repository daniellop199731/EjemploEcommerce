<!DOCTYPE html>
<html lang="en">

<?php

use function PHPSTORM_META\type;

include("src/clases/Producto.php");
include("src/clases/Pedido.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <link href="src/font-awesome/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <title>Document</title>
</head>

<body>
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0d6efd;">
        <div class="container-fluid">
            <a class="navbar-brand" style="color: #FFF;" href="#">Ejemplo Ecommerce</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-shopping-cart"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CARRITO DE COMPRA</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            if (!empty($_SESSION['variable_3'])) {
                                foreach ($_SESSION['variable_3'] as $prod) { ?>
                                    <div class="alert" role="alert">
                                        <h3><?php echo $prod['nombre']; ?></h3>
                                        <p><?php echo $prod['precio'] ?></p>
                                        <p><?php echo $prod['sku'] ?></p>
                                    </div>
                            <?php  }
                            } else {
                                echo "No tienes productos en el carrito de compra.";
                            }
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <form action="checkout.php" method="post">
                                <input type="hidden" name="productos" value="<?php print_r($_SESSION['variable_3']); ?>">
                                <button type="submit" id="comprar" class="btn btn-primary">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>