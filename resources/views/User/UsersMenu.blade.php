
@extends('layouts.app')
@section('content')
      <table class="table table-dark">
  <div class="card-header">
   <h3>Pacientes Registrados</h3>
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
<?php foreach ($users as $user): ?>
<tbody>
  <tr>
    <td>  <?php echo e($user->name); ?></td>
    <td><?php echo e($user->surname); ?></td>
    <td><?php echo e($user->cedula); ?></td>
    <td><?php echo e($user->Phone); ?></td>
      <td>
    {{csrf_field()}}
      <a class="btn btn-primary" href="/User/{{$user->id}}/edit" role="button">edit</a>
    </td>
    <td>
      <form action="/User/{{$user->id}}" method="POST">
        {{csrf_field()}}
        @method('DELETE')
      <input type="submit" id="envio" value="Eliminar" class="btn btn-danger ">
  </form>
  </td>
    </tr>
</tbody>
<?php endforeach; ?>
</table>
@endsection
