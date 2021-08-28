<h1>Actualizar registro</h1>



<form action="?controller=proud&metodo=ActualizarProducto" method="post">


    <label for="txtNombre">Nombre Producto</label>
    <input type="text" name="nombre" id="txtNombre" readonly value="<?= $producto->getNombre()?>"  >
    <br>
    <label for="txtCantidad">Cantidad  Producto</label>
    <input type="text" name="cantidad" id="txtCantidad" required value="<?= $producto->getCantidad() ?>">
    <br>
    <label for="txtPrecio">Precio</label>
    <input type="text" name="precio" id="txtPrecio" required value="<?= $producto->getPrecio() ?>">
    <br>
    <input type="submit" value="Actualizar registro">

</form>