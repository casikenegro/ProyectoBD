@extends('layouts.app')
@section('content')
  {{csrf_field()}}

  <?php foreach ($categories as $category): ?>
        <table class="table table-dark">
    <div class="card-header">
     <?php echo e($category->categories); ?>
     </div>

     <thead>
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col">Apellido</th>
     <th scope="col">Cedula</th>
     <th scope="col">Licencia</th>
      <th scope="col">Editar</th>
     <th scope="col">Eliminar</th>
   </tr>
     </thead>
<?php foreach ($doctores as $doctor): ?>
<?php if (($doctor->doctor_category_id==$category->id)): ?>
  <tbody>
    <tr>
      <td>  <?php echo e($doctor->name); ?></td>
      <td><?php echo e($doctor->surname); ?></td>
      <td><?php echo e($doctor->cedula); ?></td>
      <td><?php echo e($doctor->license); ?></td>
      <td>
    {{csrf_field()}}
      <a class="btn btn-primary" href="/Doctor/{{$doctor->id}}/edit" role="button">edit</a>
    </td>
    <td>
      <form action="/Doctor/{{$doctor->id}}" method="POST">
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
