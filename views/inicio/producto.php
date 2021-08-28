<script type="text/javascript" src="views\inicio\js\validaciones.js"></script>
<h2>Vista principal de producto</h2>

<h2> Listado de Productos</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>      
    </tr>
  </thead>
  <tbody>
    
<?php    
            $registros = $this->modelo->Listar();
            $contador=1;
            foreach ($registros as $row) {
               
?>
             <tr>
            <td> <?= $contador ?></td>
             <td> <?= $row->nombre ?> </td>
             <td> <?= $row->cantidad  ?> </td>
             <td> <?= $row->precio  ?> </td>
            <td>  <a href="?controller=producto&metodo=FormActualizarProducto&nombre=<?= $row->nombre ?> "> Actualizar </a>  </td>
             <td> <a href="?controller=producto&metodo=Borrar&nombre=<?= $row->nombre ?>"  onclick="return confirmar()"> Eliminar </a></td>
             </tr>
 <?php 
            $contador++;    
        }

?>

     
      
   
  
</tbody>
</table>