<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/paginas.css">

</head>
<body>
    <h1>Lista de vendedores</h1>
    <br>
    <a href="<?=base_url('nuevo')?>" class="btn btn-success">Nuevo vendedor</a><br><br>
    <div class="container">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Codigo vendedor</th>
                <th>Nombre vendedor</th>
                <th>fecha de envio</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($vendedores as $vend):
            ?>
            <tr>
                <td> <?=$vend['codigo_vendedor'];?> </td>
                <td> <?=$vend['nombre_vendedor'];?> </td>
                <td> <?=$vend['fecha_envio'];?> </td>
                <td> <?=$vend['producto'];?> </td>
                <td> <?=$vend['precio'];?> </td>
                <td> <?=$vend['cantidad'];?> </td>
                <td> <?=$vend['total'];?> </td>
                <td>
                <a href="<?=base_url('editar/'.$vend['codigo_vendedor']);?>" class="btn btn-info" type="button">Editar registro</a>
                </td>
                <td>
                    <a href="<?=base_url('eliminar/'.$vend['codigo_vendedor']);?>" class="btn btn-danger" type="button">Borrar registro</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>