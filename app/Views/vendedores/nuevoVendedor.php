<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Empleado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/paginas.css">
</head>
<body>
    <h1>Agregar vendedor</h1><br>
    <div class="container">
        <form action="<?=base_url('/guardar')?>" method="post">
        <!--<label for="txtCod">Codigo vendedor:</label>
        <input type="int" name="txtCod"><br>-->
        <label for="txtCod">Nombre del vendedor:</label>
        <input type="text" name="txtNombre"><br>
        <label for="txtCod">Fecha envio:</label>
        <input type="date" name="txtFecha"><br>
        <label for="txtCod">Producto:</label>
        <input type="text" name="txtProd"><br>
        <label for="txtCod">Precio:</label>
        <input type="text" name="txtPrecio"><br>
        <label for="txtCod">Cantidad</label>
        <input type="text" name="txtCant"><br>
        <label for="txtCod">Total:</label>
        <input type="text" name="txtTotal"><br>
        <input type="submit" class="btn btn-primary" value="Guardar">
        </form>
    </div>
</body>
</html>