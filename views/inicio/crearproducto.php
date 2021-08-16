<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="?controller=producto&metodo=Grabar">

    <label for="txtnombre">Nombre</label>
    <input type="text" name="nombre" id="txtnombre">
    <br>
    <label for="txtcantidad">Cantidad</label>
    <input type="text" name="cantidad" id="txtcantidad">
    <br>
    <label for="txtprecio">Precio</label>
    <input type="text" name="precio" id="txtprecio">
    <br>

    <input type="submit" value="Crear Producto">

    </form>


</body>
</html>