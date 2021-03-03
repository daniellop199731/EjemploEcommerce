<?php
include("header.php");
include("src/clases/DetallePedido.php");
$items[] = $_SESSION['variable_3'];
$sumSubTotal = 0;
?>

<section>
    <div class="container-fluid">
        <div class="container">
            <div class="row pt-5">
                <div class="alert" style="background-color: #f8f8f8" role="alert">
                    <h3>Tu pedido ha sido aceptado.</h3>
                    <h4>Aquí tienes un poco del detalle de tu pedido:</h4>
                    <br>
                    <div class="alert" role="alert">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Sku</th>
                                    <th scope="col">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['variable_3'] as $producto){ 
                                $sumSubTotal += $producto['precio']; ?>
                                <tr>
                                    <td><?php echo($producto['nombre']);?></td>
                                    <td><?php echo($producto['sku'])?></td>
                                    <td><span class="badge bg-primary"><?php echo("Precio: $ " . $producto['precio']);?></span></td>
                                </tr>
                                <?php } 
                                $envio = $sumSubTotal * 0.15;?>
                                <tr>
                                    <td></td>
                                    <td>Subtotal: </td>
                                    <td><span class="badge bg-success"><?php echo "$ " . $sumSubTotal;?></span></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Envio: </td>
                                    <td><span class="badge bg-success"><?php echo "$ " .$envio;?></span></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Total: </td>
                                    <td><span class="badge bg-success"><?php echo "$ " . ($sumSubTotal+$envio);?></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$detalle_pedido = new DetallePedido($items, $cantidad=1, $sumSubTotal, $envio); 
$pedido = new Pedido($id=1, $fecha="3/3/2021", $total = 0, $pagado="pagado", $estado="en proceso");
?>