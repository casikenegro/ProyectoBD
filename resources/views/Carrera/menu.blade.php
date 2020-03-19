@extends('layouts.app')
@section('content')
  {{csrf_field()}}

        <table class="table table-dark">
    <div class="card-header">
     </div>

     <thead>
   <tr>
     <th scope="col">Nombre</th>
     <th scope="col">Descripcion</th>
   </tr>
     </thead>
<?php if (isset($carreras)): ?>
<?php foreach ($carreras as $carrera): ?>
  <tbody>
    <tr>
      <td>  <?php echo e($carrera->nombre); ?></td>
      <td><?php echo e($carrera->descripcion); ?></td>
      <td>
    {{csrf_field()}}
      <a class="btn btn-primary" href="/carrera/{{$carrera->id}}/edit" role="button">edit</a>
    </td>
    <td>
      <form action="/carrera/{{$carrera->id}}" method="POST">
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
