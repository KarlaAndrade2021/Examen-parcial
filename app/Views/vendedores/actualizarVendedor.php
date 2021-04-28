<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizando datos vendedor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/paginas.css">
</head>
<body>
    <h1>Actualizar registros del vendedor</h1><br>
    <div class="container"> 
        <form action="<?=base_url('/actualizar')?>" method="post">
           
            <input type="hidden" name="txtCod" value="<?=$vendedor['codigo_vendedor']?>"><br>
            <label for="txtNombre">Nombre del vendedor:</label>
            <input type="text" name="txtNombre" value="<?=$vendedor['nombre_vendedor']?>"><br>
            <label for="txtFecha">Fecha envio:</label>
            <input type="date" name="txtFecha" value="<?=$vendedor['fecha_envio']?>"><br>
            <label for="txtProd">Producto:</label>
            <input type="text" name="txtProd" value="<?=$vendedor['producto']?>"><br>
            <label for="txtPrecio">Precio:</label>
            <input type="text" name="txtPrecio" value="<?=$vendedor['precio']?>"><br>
            <label for="txtCant">Cantidad</label>
            <input type="text" name="txtCant" value="<?=$vendedor['cantidad']?>"><br>
            <label for="txtTotal">Total:</label>
            <input type="text" name="txtTotal" value="<?=$vendedor['total']?>"><br>
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </form>
    </div>
</body>
</html>