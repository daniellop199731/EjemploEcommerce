<?php
include("src/clases/DetallePedido.php");
include("src/clases/Pedido.php");
include("src/clases/Producto.php");

$producto_audifonos = new Producto($id = "1", $nombre = "Audifonos", $sku = "EA-001", $precio = 50000, $peso = 500, $tipo = "");
$producto_arroz = new Producto($id = "2", $nombre = "Arroz", $sku = "WE-001", $precio = 200, $peso = 20, $tipo = "peso");
$producto_medias = new Producto($id = "3", $nombre = "Medias", $sku = "SP-001", $precio = 15999, $peso = 35, $tipo = "descuento");

$detallePedido1 = new DetallePedido($producto_audifonos, 2, 1000);
$detallePedido2 = new DetallePedido($producto_arroz, 1, 1000);
$detallePedido3 = new DetallePedido($producto_medias, 6, 1000);

$pedido = new Pedido (1, '2021/03/03');
$pedido->agregarDetallePedido($detallePedido1);
$pedido->agregarDetallePedido($detallePedido2);
$pedido->agregarDetallePedido($detallePedido3);

$pedido->getListaDetallesProductos();

echo $pedido->getTotal();


?>