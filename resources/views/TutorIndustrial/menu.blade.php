@extends('layouts.app')
@section('content')
  {{csrf_field()}}

        <table class="table table-dark">
    <div class="card-header">
     </div>

     <thead>
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col">Apellido</th>
     <th scope="col">Cedula</th>
     <th scope="col">Correo</th>
     <th scope="col">Telefono</th>
      <th scope="col">Editar</th>
     <th scope="col">Eliminar</th>
   </tr>
     </thead>
<?php if (isset($estudiantes)): ?>
<?php foreach ($estudiantes as $estudiante): ?>
  <tbody>
    <tr>
      <td>  <?php echo e($estudiante->nombre); ?></td>
      <td><?php echo e($estudiante->apellido); ?></td>
      <td><?php echo e($estudiante->cedula); ?></td>
      <td><?php echo e($estudiante->correo); ?></td>
      <td><?php echo e($estudiante->telefono); ?></td>

      <td>
    {{csrf_field()}}
      <a class="btn btn-primary" href="/estudiante/{{$estudiante->id}}/edit" role="button">edit</a>
    </td>
    <td>
      <form action="/estudiante/{{$estudiante->id}}" method="POST">
        {{csrf_field()}}
        @method('DELETE')
      <input type="submit" id="envio" value="Eliminar" class="btn btn-danger ">
  </form>
  </td>
    </tr>
</tbody>
<?php endforeach; ?>
<?php endif; ?>
</table>

@endsection
