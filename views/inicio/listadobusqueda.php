<h2> Resultados de la búsqueda</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">cantidad</th>      
      <th scope="col">Precio</th>      
    </tr>
  </thead>
  <tbody>
    
  <tr>
      <th scope="row">1</th>
      
      <td> <?= $producto->getNombre(); ?> </td>
      <td> <?= $producto->getCantidad();  ?> </td>
      <td> <?= $producto->getPrecio();  ?> </td>
      
    </tr>
  
</tbody>
</table>