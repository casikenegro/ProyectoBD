
@extends('layouts.app')
@section('content')
<?php foreach ($categories as $category): ?>
      <table class="table table-dark">
  <div class="card-header">
   <h3><?php echo e($category->categories); ?> </h3>
   </div>

   <thead>
 <tr>
   <th scope="col">Nombre</th>
   <th scope="col">Apellido</th>
   <th scope="col">Cedula</th>
   <th scope="col">telefono</th>
    <th scope="col">Editar</th>
   <th scope="col">Eliminar</th>
 </tr>
   </thead>
<?php foreach ($employes as $employe): ?>
<?php if (($employe->employe_category_id==$category->id)): ?>
<tbody>
  <tr>
    <td>  <?php echo e($employe->name); ?></td>
    <td><?php echo e($employe->surname); ?></td>
    <td><?php echo e($employe->cedula); ?></td>
    <td><?php echo e($employe->Phone); ?></td>
    <td>
  {{csrf_field()}}
    <a class="btn btn-primary" href="/Employe/{{$employe->id}}/edit" role="button">edit</a>
  </td>
  <td>
    <form action="/Employe/{{$employe->id}}" method="POST">
      {{csrf_field()}}
      @method('DELETE')
    <input type="submit" id="envio" value="Eliminar" class="btn btn-danger ">
</form>
</td>
  </tr>
</tbody>
<?php endif; ?>
<?php endforeach; ?>
<?php endforeach; ?>
</table>
@endsection
